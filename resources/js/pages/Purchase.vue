<template>
  <div>
    <h4 class="card-title">Add Purchase</h4>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label">Supplier</label>
          <select class="js-example-basic-single w-100">
            <option value="TX">Texas</option>
            <option value="NY">New York</option>
            <option value="FL">Florida</option>
            <option value="KN">Kansas</option>
            <option value="HW">Hawaii</option>
          </select>
        </div>
      </div>
      <!-- Col -->
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label">Purchase Date</label>
          <div class="input-group date datepicker" id="datePickerExample">
            <input type="text" class="form-control" /><span
              class="input-group-addon"
              ><i data-feather="calendar"></i
            ></span>
          </div>
        </div>
      </div>
      <!-- Col -->
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label">Invoice No</label>
          <input type="text" class="form-control" placeholder="Invoice No" />
        </div>
      </div>
      <!-- Col -->
    </div>
    <!-- Row -->
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label class="control-label">Purchase Details</label>
          <textarea
            class="form-control"
            rows="5"
            placeholder="Purchase Details Here.."
          ></textarea>
        </div>
      </div>
      <!-- Col -->
      <div class="col-sm-12">
        <div class="form-group">
          <table>
            <thead>
              <tr>
                <th>Item Information</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
            </thead>

            <tr>
              <td>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Information"
                />
              </td>
              <td>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Quantity"
                />
              </td>
              <td>
                <input type="text" class="form-control" placeholder="Price" />
              </td>
              <td>
                <input type="text" class="form-control" readonly />
              </td>
              <td>
                <button
                  onclick="deleteRow(this)"
                  type="button"
                  class="btn btn-danger"
                >
                  Delete
                </button>
              </td>
            </tr>

            <tfoot>
              <tr>
                <td colspan="2">
                  <button
                    onclick="myFunction2()"
                    type="button"
                    class="btn btn-primary"
                  >
                    Add New Row
                  </button>
                </td>
                <td>Grand Total:</td>
                <td>
                  <input type="text" class="form-control" readonly />
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <!-- Row -->
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group mb-0 row">
          <div class="col-lg-4">
            <button type="button" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import axios from "axios";

export default {};
</script>
