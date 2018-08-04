<div class="row">
    <div class="input-field col s12">
        <input id="key" type="text" class="validate" name="key" value="{{ $setting->key ?? null }}">
        <label for="key">键名</label>
    </div>
    <div class="input-field col s12">
        <input id="value" type="text" class="validate" name="value" value="{{ $setting->value ?? null }}">
        <label for="value">键值</label>
    </div>
    <div class="input-field col s12">
        <input id="tag" type="text" class="validate" name="tag" value="{{ $setting->tag ?? null }}">
        <label for="tag">标签</label>
    </div>
</div>
