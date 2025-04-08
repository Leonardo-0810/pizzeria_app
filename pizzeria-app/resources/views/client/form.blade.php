<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="users_id" class="form-label">{{ __('Users Id') }}</label>
            <select name="users_id" id="users_id" class="form-control @error('users_id') is-invalid @enderror" required>
        <option value="">Seleccione un usuario</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}" {{ old('users_id', $client->users_id ?? '') == $user->id ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
        @endforeach
    </select>
    @error('users_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $client?->address) }}" id="address" placeholder="Address">
            {!! $errors->first('address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="phone" class="form-label">{{ __('Phone') }}</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $client?->phone) }}" id="phone" placeholder="Phone">
            {!! $errors->first('phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>