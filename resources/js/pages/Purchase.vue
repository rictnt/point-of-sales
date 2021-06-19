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
      <div v-if="foundProducts.length">
        <ul class="list-group">
          <li
            class="list-group-item cursor-pointer"
            v-for="product in foundProducts"
            :key="product.id"
            @click="addProduct(product)"
          >
            {{ product.name }}
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="form-group">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Product</th>
          <th>Cost Price</th>
          <th>Sell Price</th>
          <th>Quantity</th>
          <th>Discount</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>

      <tr v-for="product in addedProducts" :key="product.id">
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
          <input
            v-model="product.qty"
            type="text"
            class="form-control"
          />
        </td>
        <td>
          <input
            v-model="product.discount"
            type="text"
            class="form-control"
          />
        </td>
        <td>
          <input
            :value="getTotal(product)"
            type="text"
            class="form-control"
            readonly
          />
        </td>
        <td>
          <button @click="removeProduct" type="button" class="btn btn-danger">
            X
          </button>
        </td>
      </tr>

      <tfoot>
        <tr>
          <td colspan="5"></td>
          <td>Grand Total:</td>
          <td>
            <input value="123" type="text" class="form-control" readonly />
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
      foundProducts: [],
      addedProducts: [],
    };
  },
  methods: {
    async getProduct() {
      let route = `/api/products?q=${this.search}`;
      if (this.search != "") {
        await axios(route)
          .then((res) => {
            this.foundProducts = res.data ?? "";
          })
          .catch((e) => {
            error = console.log(e.message);
          });
      } else {
        this.foundProducts = [];
      }
    },

    addProduct(newProduct) {

      let find = this.addedProducts.find((product) => product.id == newProduct.id);

      if (!find) {
        newProduct.qty = 1;
        newProduct.discount = 0;
        newProduct.intotal = (newProduct.cost_price * newProduct.qty);
        this.addedProducts.push(newProduct);

      } else {
        toastr.info("Product Already Added");
      }
      this.search = "";
      this.foundProducts = [];
    },

    removeProduct(newProduct) {
      this.addedProducts.pop((product) => product.id == newProduct.id);
    },

    getTotal(product) {
         let total = product.cost_price * product.qty;
          if (!isNaN(product.discount)) {
            total -= product.discount;
          }
        return total;
    },
  },
};
</script>
