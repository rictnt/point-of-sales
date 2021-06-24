<template>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"
      >Select Product to add in list:</label
    >
    <div class="col-sm-9">
      <input
        @keyup="getProduct"
        v-model="product.search"
        type="text"
        class="form-control"
        autofocus
        placeholder="Enter product name or ID"
      />
      <div v-if="product.founds.length">
        <ul class="list-group">
          <li
            class="list-group-item cursor-pointer"
            v-for="product in product.founds"
            :key="product.id"
            @click="addProduct(product)"
          >
            {{ product.name }}
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div v-if="product.added.length" class="form-group">
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

      <tr v-for="product in product.added" :key="product.id">
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
              v-model="purchase_discount"
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
  <div v-if="product.added.length" class="row">
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
        <input
          type="number"
          class="form-control"
          v-model="payment.paid"
          @keyup="sycnDue($event.target.value)"
        />
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label>Status</label>
        <select v-model="product.status">
          <option value="1">Received</option>
          <option value="0">Not Received</option>
        </select>
      </div>
      <div class="form-group">
        <label>Payment Due</label>
        <input
          type="number"
          class="form-control"
          :value="payment.due"
          readonly
        />
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
      product: {
        search: "",
        founds: [],
        added: [],
        status: 1,
      },

      sub_total: 0,
      net_amount: 0,
      discount_total: 0,
      purchase_discount: 0,

      payment: {
        method: "",
        paid: "",
        due: 0,
      },
    };
  },
  computed: {
    getDiscountTotal() {
      // console.log("discount total called");

      this.discount_total = this.product.added.reduce(
        (value, product) => value + parseInt(product.discount),
        0
      );
      return this.discount_total;
    },

    getSubTotal() {
      // console.log("grand total called");

      let total = this.product.added.reduce(
        (value, product) => value + product.total,
        0
      );
      return (this.sub_total = total - this.discount_total);
    },

    getGrandTotal() {
      // console.log("net amount called");

      return (this.net_amount = this.payment.paid =
        this.sub_total - this.purchase_discount);
    },
  },

  methods: {
    async getProduct() {
      let route = `/api/products?q=${this.product.search}`;
      if (this.product.search != "") {
        await axios
          .get(route)
          .then((res) => {
            this.product.founds = res.data ?? "";
          })
          .catch((e) => {
            error = console.log(e.message);
          });
      } else {
        this.product.founds = [];
      }
    },

    addProduct(p) {
      let find = this.product.added.find((product) => product.id == p.id);

      if (find) {
        // toastr.info("Product Already Added");
        this.product.added.forEach((product) => {
          if (find.id == product.id) {
            product.qty++;
          }
        });
      } else {
        p.qty = 1;
        p.discount = 0;
        this.product.added.push(p);
      }
      this.product.search = "";
      this.product.founds = [];
    },

    removeProduct(p) {
      this.product.added = this.product.added.filter(
        (product) => product.id != p.id
      );
    },

    getTotal(p) {
      // console.log("get total called");

      return p.cost_price * p.qty - p.discount;
    },

    sycnDue(paidAmount) {
      return (this.payment.due = this.getGrandTotal - paidAmount);
    },

   save() {
     let route = `/api/purchases`;
      axios
        .post(route, this.$data)
        .then((res) => {
          console.log(res.data);
        })
        .catch((e) => {
          error = console.log(e.message);
        });
    },
  },
};
</script>
