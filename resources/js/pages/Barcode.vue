<template>
  <div>
    <h6 class="card-title">Create Barcode</h6>
    <div class="col-md-12">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Select Product:</label>
        <div class="col-sm-9">
          <input
            @keyup="getProduct($event.target.value)"
            type="text"
            class="form-control"
          />
          <div v-if="!foundProducts" class="text-danger">
            No product found..!
          </div>
        </div>
        <div class="col-md-12">
          <table v-if="foundProducts.length">
            <thead>
              <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="product in foundProducts" :key="product.id">
                <td>{{ product.id }}</td>
                <td>{{ product.name }}</td>
                <td class="text-center">
                  <button
                    @click="addProduct(product.id)"
                    class="btn btn-success"
                  >
                    Select
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
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
                <button type="button" class="btn btn-secondary">-</button>
                <input type="text" class="form-control" :value="product.qty">
                <button type="button" class="btn btn-secondary">+</button>
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
      foundProducts: [],
      addedProducts: [],
    };
  },
  methods: {
    async getProduct(q) {
      let route = `/api/products?q=${q}`;
      if (q) {
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
      let currentProduct = this.foundProducts.find(
        (product) => product.id == id
      );

      let checkIfExist = this.addedProducts.find(
        (product) => product.id == currentProduct.id
      );

      if (!checkIfExist) {
        this.addedProducts.push(currentProduct);
      } else {
        toastr.info("Product Already Added");
      }
    },
    removeProduct(id) {
      this.addedProducts.pop((product) => product.id == id);
    },
  },
};
</script>

