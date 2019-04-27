@extends ('layouts.app')

@section('content')
<!-- START: ecommerce/product-edit -->
<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Product Edit</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-8">
        <h4 class="text-black mb-3"><strong>Main Parameters</strong></h4>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="l301">Title</label>
              <input type="text" class="form-control" id="l301" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="l302">SKU</label>
              <input type="text" class="form-control" id="l302" />
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-control-label" for="l20">Category</label>
          <select multiple="" class="form-control height-200" id="l20">
            <option value="Option 1">— Furniture</option>
            <option value="Option 2">&nbsp; &nbsp; — Tables</option>
            <option value="Option 3">&nbsp;&nbsp; — Chairs</option>
            <option value="Option 4">&nbsp; &nbsp; &nbsp; &nbsp; — Rounded Chairs</option>
            <option value="Option 4">&nbsp; &nbsp; &nbsp; &nbsp; — Squared Chairs</option>
            <option value="Option 5">— Electronics</option>
            <option value="Option 2">&nbsp; &nbsp; — TV-set</option>
            <option value="Option 2">&nbsp; &nbsp; — Monitors</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-control-label" for="l15">Short Description</label>
          <textarea class="form-control" rows="3" id="l15"></textarea>
        </div>
        <div class="form-group">
          <label class="form-control-label" for="l151">Full Description</label>
          <textarea class="form-control" rows="3" id="l151"></textarea>
        </div>
        <br />

        <h4 class="text-black mb-3"><strong>Pricing</strong></h4>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="l30">Total Price</label>
              <input type="text" class="form-control" id="l30" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="l31">Discount Price</label>
              <input type="text" class="form-control" id="l31" />
            </div>
          </div>
        </div>
        <br />

        <h4 class="text-black mb-3"><strong>Attributes</strong></h4>
        <div class="form-group">
          <label class="form-control-label" for="l14">Colors</label>
          <select multiple="" class="form-control" id="l14">
            <option value="Option 1">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
            <option value="Option 4">Option 4</option>
            <option value="Option 5">Option 5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="l13">Size</label>
          <select class="form-control" id="l13">
            <option value="Option 1">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
            <option value="Option 4">Option 4</option>
            <option value="Option 5">Option 5</option>
          </select>
        </div>
        <div class="form-actions">
          <button type="button" class="btn btn-primary width-150">Save Product</button>
          <button type="button" class="btn btn-default">Cancel</button>
        </div>
      </div>

      <div class="col-lg-4">
        <h4 class="text-black mb-3"><strong>Product Image</strong></h4>
        <div class="cui-ecommerce-catalog-item">
          <div class="cui-ecommerce-catalog-item-img">
            <a href="javascript: void(0);">
              <img src="/cleanui/components/ecommerce/common/img/ecommerce-empty.jpg" alt="" />
            </a>
          </div>
          <a
            href="javascript: void(0);"
            class="cui-utils-link-underlined cui-ecommerce-catalog-item-img-remove"
          >
            <small
              ><i class="icmn-cross"><!-- --></i></small
            >
            Remove
          </a>
        </div>
        <div class="form-group">
          <input type="file" id="l16" />
          <br />
          <small>Technical information for user</small>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: ecommerce/product-edit -->

@endsection