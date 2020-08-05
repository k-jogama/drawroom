@csrf
<div class="md-form">
  <label>{{ config('const.TITLE') }}</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
</div>
<div class="form-group">
  <div>
    <label></label>
    <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>
  </div>
  <div>
    <label></label>
    <input type="text" name="worklocation" class="form-control" required value="{{ old('worklocation') }}" placeholder="作業場所">
  </div>
  <div class="mt-3">
    <label>納品日</label>
    <input type="date" name="deliverydate" class="form-control" required value="{{ old('deliverydate') }}" placeholder="納品日">
  </div>
</div>