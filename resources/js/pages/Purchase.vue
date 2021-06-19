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
            @click="addProduct(product.id)"
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
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>

      <tr v-for="product in addedProducts" :key="product.id">
        <td>
          <input :value="product.id" type="text" class="form-control" readonly/>
        </td>
        <td>
          <input :value="product.name" type="text" class="form-control" readonly/>
        </td>
        <td>
          <input :value="product.cost_price" type="text" class="form-control" />
        </td>
        <td>
          <input :value="product.sell_price" type="text" class="form-control" />
        </td>
        <td>
          <input value="1" type="text" class="form-control" />
        </td>
        <td>
          <input value="1" type="text" class="form-control" />
        </td>
        <td>
          <button
            @click="removeProduct"
            type="button"
            class="btn btn-danger"
          >
            Delete
          </button>
        </td>
      </tr>

      <tfoot>
        <tr>
          <td colspan="4">
          </td>
          <td>Grand Total:</td>
          <td>
            <input type="text" class="form-control" readonly />
          </td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </div>
</template>

<script>
// import axios from "axios";

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
      if (this.search != '') {
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

    addProduct(id) {
      let currentProduct = this.foundProducts.find(product => product.id == id)
      let checkIfExist = this.addedProducts.find(
        (product) => product.id == id
      );

      if (!checkIfExist) {
        currentProduct.qty = 1
        this.addedProducts.push(currentProduct);
      } else {
        toastr.info("Product Already Added");
      }
      this.search = "";
      this.foundProducts = [];
    },

    removeProduct(id) {
      this.addedProducts.pop((product) => product.id == id);
    },

    decreaseQty(id){

    return this.addedProducts.filter(product => {
       if (product.id == id && product.qty != 1) {
           product.qty -= 1
       }
       return product
     })
    },

    increaseQty(id){

    return this.addedProducts.filter(product => {
       if (product.id == id) {
         product.qty += 1
       }
       return product
     })
    }
  },
};
</script>
