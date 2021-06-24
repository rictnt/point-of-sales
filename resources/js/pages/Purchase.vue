<template>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"
      >Select Product to add in list:</label
    >
    <div class="col-sm-9">
      <input
        v-model="query"
        type="text"
        class="form-control"
        autofocus
        placeholder="Enter product name or ID"
      />
      <div v-if="products_found.length">
        <ul class="list-group">
          <li
            class="list-group-item cursor-pointer"
            v-for="product in products_found"
            :key="product.id"
            @click="addProduct(product)"
          >
            {{ product.name }}
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div v-if="products_added.length" class="form-group">
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

      <tr v-for="product in products_added" :key="product.id">
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
          {{ product.total }}
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
          <td class="text-center">{{ sub_total }}</td>
          <td></td>
        </tr>
        <tr>
          <td colspan="7" class="text-right">Purchase Discount:</td>
          <td class="text-center">
            <input
              v-model="discount"
              type="number"
              class="form-control text-center"
            />
          </td>
          <td></td>
        </tr>
        <tr>
          <td colspan="7" class="text-right">Grand Total:</td>
          <td class="text-center">{{ grand_total }}</td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </div>
  <div v-if="products_added.length" class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label>Payment Method</label>
        <select>
          <option value="">Cash</option>
          <option value="">Bank</option>
          <option value="">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label>Paid Amount</label>
        <input type="number" class="form-control" v-model="paid_amount" />
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Status</label>
        <select>
          <option value="1">Received</option>
          <option value="0">Not Received</option>
        </select>
      </div>
      <div class="form-group">
        <label>Payment Due</label>
        <input type="number" class="form-control" :value="due_amount" readonly />
      </div>
    </div>
    <div class="col-md-12 text-center">
      <button class="btn mx-3 btn-success" @click="save()">Save</button>
      <button class="btn mx-3 btn-warning">Draft</button>
      <button class="btn mx-3 btn-secondary" @click="this.$router.go()">
        Reset
      </button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      query: "",
      products_found: [],
      products_added: [],
      discount: 0,
      paid_amount: 0,
    };
  },

  computed: {
    sub_total() {
      return this.products_added.reduce((value, item) => value + item.total, 0);
    },

    grand_total() {
      return (
        this.products_added.reduce((value, item) => value + item.total, 0) -
        this.discount
      );
    },

    due_amount(){
      return this.grand_total - this.paid_amount
    }
  },

  methods: {
    addProduct(product) {
      let check = this.products_added.find((item) => item.id == product.id);

      if (check) {
        this.products_added.forEach((product) => {
          if (find.id == product.id) {
            product.qty++;
          }
        });
      } else {
        product.qty = 1;
        product.discount = 0;
        product.total = product.cost_price;
        this.products_added.push(product);
        // console.log("product added");
      }
      this.query = "";
      this.products_found = [];
    },
  },

  watch: {
    query() {
      if (this.query != "") {
        // console.log("Finding products...");
        let route = `/api/products?q=${this.query}`;
        axios
          .get(route)
          .then((res) => {
            // console.log("Produts found");
            this.products_found = res.data;
          })
          .catch((e) => {
            error = console.log(e.message);
          });
      } else {
        this.products_found = [];
      }
    },

    products_added: {
      handler() {
        console.log("updating products");
        this.products_added.forEach(
          (item) => (item.total = item.cost_price * item.qty - item.discount)
        );
        // this.paid_amount = this.grand_total
      },
      deep: true,
    },

    grand_total(){
      this.paid_amount = this.grand_total
    }
  },
};
</script>
