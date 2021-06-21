<template>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"
      >Select Product to add in list:</label
    >
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
  <div v-if="added_products.length" class="form-group">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Product</th>
          <th>Cost Price</th>
          <th>Sell Price</th>
          <th>Quantity</th>
          <th>Expire</th>
          <th>Discount</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>

      <tr v-for="product in added_products" :key="product.id">
        <td>{{ product.id }}</td>
        <td>{{ product.name }}</td>
        <td>
          <input
            v-model="product.cost_price"
            type="number"
            min="1"
            class="form-control"
          />
        </td>
        <td>
          <input
            v-model="product.sell_price"
            type="number"
            min="1"
            class="form-control"
          />
        </td>
        <td>
          <input
            v-model="product.qty"
            min="1"
            type="number"
            class="form-control"
          />
        </td>
        <td>
          <input
            v-model="product.expire"
            type="date"
            class="form-control date"
          />
        </td>
        <td>
          <input
            v-model="product.discount"
            type="number"
            min="0"
            class="form-control"
          />
        </td>
        <td class="text-center font-weight-bold">
          {{ (product.total = getTotal(product)) }}
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

      <tfoot class="bg-light font-weight-bold">
        <tr>
          <td colspan="7" class="text-right">Sub Total:</td>
          <td class="text-center">{{ getSubTotal }}</td>
          <td></td>
        </tr>
        <tr>
          <td colspan="7" class="text-right">Purchase Discount:</td>
          <td class="text-center">
            <input
              v-model="discount_in_total"
              type="number"
              class="form-control text-center"
            />
          </td>
          <td></td>
        </tr>
        <tr>
          <td colspan="7" class="text-right">Grand Total:</td>
          <td class="text-center">
            {{ getGrandTotal }}
          </td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </div>
  <div v-if="added_products.length" class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Payment Method</label>
        <select>
          <option value="">Bank</option>
          <option value="">Cash</option>
          <option value="">Other</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Status</label>
        <select>
          <option value="">Received</option>
          <option value="">Not Received</option>
        </select>
      </div>
    </div>
    <div class="col-md-12 text-center">
      <button class="btn mx-3 btn-success">Save</button>
      <button class="btn mx-3 btn-warning">Draft</button>
      <button class="btn mx-3 btn-secondary" @click="this.$router.go()">Reset</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      search: "",
      found_products: [],
      added_products: [],
      sub_total: 0,
      net_amount: 0,
      discount_total: 0,
      discount_in_total: 0,
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

      if (find) {
        // toastr.info("Product Already Added");
        this.added_products.forEach((product) => {
          if (find.id == product.id) {
            product.qty++;
          }
        });
      } else {
        p.qty = 1;
        p.discount = 0;
        this.added_products.push(p);
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
      console.log("get total called");

      return p.cost_price * p.qty - p.discount;
    },
  },
  computed: {
    getDiscountTotal() {
      console.log("discount total called");

      this.discount_total = this.added_products.reduce(
        (value, product) => value + parseInt(product.discount),
        0
      );
      return this.discount_total;
    },

    getSubTotal() {
      console.log("grand total called");

      let total = this.added_products.reduce(
        (value, product) => value + product.total,
        0
      );
      return (this.sub_total = total - this.discount_total);
    },

    getGrandTotal() {
      console.log("net amount called");

      return (this.net_amount = this.sub_total - this.discount_in_total);
    },
  },
};
</script>
