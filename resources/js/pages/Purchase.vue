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
          <th>Expire</th>
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
            @keyup="updateTotal(product)"
            type="text"
            class="form-control"
          />
        </td>
        <td>
          <input
            v-model="product.sell_price"
            @keyup="updateTotal(product)"
            type="text"
            class="form-control"
          />
        </td>
        <td>
          <input
            v-model="product.qty"
            @keyup="updateTotal(product)"
            type="text"
            class="form-control"
          />
        </td>
        <td>
          <input
            v-model="product.discount"
            @keyup="updateTotal(product)"
            type="text"
            class="form-control"
          />
        </td>
        <td>
          <input v-model="product.expire" type="date" class="form-control" />
        </td>
        <td>
          <input
            :value="product.intotal"
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
            <input
              :value="grandTotal"
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
      foundProducts: [],
      addedProducts: [],
      grandTotal: 0,
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
      let find = this.addedProducts.find(
        (product) => product.id == newProduct.id
      );

      if (!find) {
        newProduct.qty = 1;
        newProduct.discount = 0;
        newProduct.intotal = newProduct.cost_price * newProduct.qty;
        this.addedProducts.push(newProduct);
      } else {
        toastr.info("Product Already Added");
      }
      this.search = "";
      this.foundProducts = [];
      this.grandTotal();
    },

    removeProduct(newProduct) {
      this.addedProducts.pop((product) => product.id == newProduct.id);
      this.grandTotal();

    },

    updateTotal(gotProduct) {
      this.addedProducts.forEach((product) => {
        if (product.id == gotProduct.id) {
          product.intotal = product.cost_price * product.qty;
          if (!isNaN(product.discount)) {
            product.intotal -= product.discount;
          }
        }
      });
      this.grandTotal();
    },

    grandTotal() {
      this.grandTotal = this.addedProducts.reduce((a, b) => {
        a.intotal + b.intotal;
      }, 0);
    },
  },
};
</script>
