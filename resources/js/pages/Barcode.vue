<template>
  <div>
    <h6 class="card-title">Create Barcode</h6>
    <div class="col-md-12">
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
    </div>
    <div class="offset-md-6"></div>
    <div class="col-md-12">
      <table style="width: 100%" id="product_table">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Barcode</th>
            <th style="width: 200px">Quantity</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="product in addedProducts" :key="product.id">
            <td>{{ product.name }}</td>
            <td>{{ product.barcode }}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                <button @click="decreaseQty(product.id)" type="button" class="btn btn-secondary">-</button>
                <input type="text" class="form-control" :value="product.qty" />
                <button @click="increaseQty(product.id)" type="button" class="btn btn-secondary">+</button>
              </div>
            </td>
            <td>
              <button @click="removeProduct(product.id)" class="btn btn-danger">
                Remove
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
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

