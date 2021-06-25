<template>
  <h4 class="card-title">Add Purchase</h4>
  {{ products_added }}
  <div class="row">
    <div class="col-sm-4">
      <div class="form-group">
        <label class="control-label">Supplier</label>
        <select v-model="supplier_id" class="js-example-basic-single w-100">
          <!-- <option value="">SELECT SUPPLIER</option> -->
          <option value="1">Emon Khan</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label class="control-label">Purchase Date</label>
        <input type="date" class="form-control" v-model="date" />
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label class="control-label">Invoice No</label>
        <input
          type="text"
          class="form-control"
          v-model="invoice"
          placeholder="Invoice No"
        />
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
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
        <table class="table table-responsive">
          <thead>
            <tr>
              <th>ID</th>
              <th>Product</th>
              <th>Price</th>
              <th>Cost</th>
              <th>Qty</th>
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
              {{ product.price }}
            </td>
            <td>
              <input
                v-model="product.cost"
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
                  min="0"
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
            <select v-model="payment_method">
              <option value="cash">Cash</option>
              <option value="bank">Bank</option>
            </select>
          </div>
          <div class="form-group">
            <label>Paid Amount</label>
            <input type="number" class="form-control" v-model="paid" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Status</label>
            <select v-model="product_status">
              <option value="1">Received</option>
              <option value="0">Not Received</option>
            </select>
          </div>
          <div class="form-group">
            <label>Payment Due</label>
            <input type="number" class="form-control" :value="due" readonly />
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
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      supplier_id: 1,
      date: new Date().toISOString().substr(0, 10),
      invoice: Math.floor(Math.random() * (999999 - 100000) + 100000),
      query: "",
      products_found: [],
      products_added: [],
      discount: 0,
      paid: 0,
      payment_method: "cash",
      product_status: 1,
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

    due() {
      return this.grand_total - this.paid;
    },
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
        product.cost = product.price + 10;
        product.qty = 1;
        product.discount = 0;
        product.expire = null;
        product.total = 0;
        this.products_added.push(product);
        // console.log("product added");
      }
      this.query = "";
      this.products_found = [];
    },
    removeProduct(product) {
      // console.log("removing product from list");
      return (this.products_added = this.products_added.filter(
        (item) => item.id != product.id
      ));
    },

    save() {
      let url = `/api/purchases`;
      let data = {
        supplier_id: this.supplier_id,
        date: this.date,
        invoice: this.invoice,
        products: this.products_added,
        sub_total: this.sub_total,
        discount: parseInt(this.discount),
        grand_total: this.grand_total,
        paid: this.paid,
        due: this.due,
        payment_method: this.payment_method,
        product_status: this.product_status,
      };
      // console.log(data)

      axios
        .post(url, data)
        .then((res) => {
          res.status === 200
            ? toastr.success("Purchase has been added", "Success")
            : toastr.warning("Something went wrong");
          // this.products_added = [];
        })
        .catch((e) => console.log(e));
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
        // console.log("updating products");
        this.products_added.forEach(
          (item) => (item.total = item.cost * item.qty - item.discount)
        );
      },
      deep: true,
    },

    grand_total() {
      this.paid = this.grand_total;
    },
  },
};
</script>
