<template>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Select Product:</label>
    <div class="col-sm-9">
      <input
        @keyup="getProduct"
        v-model="search"
        type="text"
        class="form-control"
        autofocus
        placeholder="Enter product name or ID"
      />
      <div v-if="found_products.length">
        <ul class="list-group">
          <li
            class="list-group-item cursor-pointer"
            v-for="product in found_products"
            :key="product.id"
            @click="addProduct(product)"
          >
            {{ product.name }}
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="form-group" v-if="added_products.length">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Product</th>
          <th>Cost Price</th>
          <th>Sell Price</th>
          <th>Quantity</th>
          <th>Discount</th>
          <th>Expire</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>

      <tr v-for="product in added_products" :key="product.id">
        <td>
          <input
            :value="product.id"
            type="text"
            class="form-control"
            readonly
          />
        </td>
        <td>
          <input
            :value="product.name"
            type="text"
            class="form-control"
            readonly
          />
        </td>
        <td>
          <input
            v-model="product.cost_price"
            type="text"
            class="form-control"
          />
        </td>
        <td>
          <input
            v-model="product.sell_price"
            type="text"
            class="form-control"
          />
        </td>
        <td>
          <input v-model="product.qty" type="text" class="form-control" />
        </td>
        <td>
          <input v-model="product.discount" type="text" class="form-control" />
        </td>
        <td>
          <input v-model="product.expire" type="date" class="form-control" />
        </td>
        <td>
          <input
            :value="(product.total = getTotal(product))"
            type="text"
            class="form-control"
            readonly
          />
        </td>
        <td>
          <button
            @click="removeProduct(product)"
            type="button"
            class="btn btn-danger"
          >
            X
          </button>
        </td>
      </tr>

      <tfoot>
        <tr>
          <td colspan="6"></td>
          <td>Grand Total:</td>
          <td>
            <input
              :value="getGrandTotal"
              type="text"
              class="form-control"
              readonly
            />
          </td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      search: "",
      found_products: [],
      added_products: [],
      grand_total: 0,
    };
  },
  methods: {
    async getProduct() {
      let route = `/api/products?q=${this.search}`;
      if (this.search != "") {
        await axios(route)
          .then((res) => {
            this.found_products = res.data ?? "";
          })
          .catch((e) => {
            error = console.log(e.message);
          });
      } else {
        this.found_products = [];
      }
    },

    addProduct(p) {
      let find = this.added_products.find((product) => product.id == p.id);

      if (!find) {
        p.qty = 1;
        p.discount = 0;
        this.added_products.push(p);
      } else {
        toastr.info("Product Already Added");
      }
      this.search = "";
      this.found_products = [];
    },

    removeProduct(p) {
      this.added_products = this.added_products.filter(
        (product) => product.id != p.id
      );
    },
    
    getTotal(p) {
      console.log('get total called');

      return (p.cost_price * p.qty) - p.discount;
    },
  },
  computed: {
    getGrandTotal() {
      console.log("grand total called");

      this.grand_total = this.added_products.reduce(
        (value, product) => value + product.total,
        0
      );
      return this.grand_total;
    },
  },
};
</script>
