<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="users_id" class="form-label">{{ __('Users Id') }}</label>
            <select name="users_id" id="users_id" class="form-control @error('users_id') is-invalid @enderror" required>
            <option value="">Seleccione un usuario</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ old('user_id', $employee->user_id ?? '') == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
            </select>
            @error('user_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="position" class="form-label">{{ __('Position') }}</label>
            <select name="position" id="position" class="form-control @error('position') is-invalid @enderror" required>
        <option value="">Seleccione un cargo</option>
        @foreach (['cajero', 'administrador', 'cocinero', 'mensajero'] as $pos)
            <option value="{{ $pos }}" {{ old('position', $employee->position ?? '') == $pos ? 'selected' : '' }}>
                {{ ucfirst($pos) }}
            </option>
        @endforeach
            </select>
            @error('position')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-2 mb20">
            <label for="identification_number" class="form-label">{{ __('Identification Number') }}</label>
            <input type="text" name="identification_number" class="form-control @error('identification_number') is-invalid @enderror" value="{{ old('identification_number', $employee?->identification_number) }}" id="identification_number" placeholder="Identification Number">
            {!! $errors->first('identification_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="salary" step="0.01" class="form-label">{{ __('Salary') }}</label>
            <input type="number"  name="salary" class="form-control @error('salary') is-invalid @enderror" value="{{ old('salary', $employee?->salary) }}" id="salary" placeholder="Salary">
            {!! $errors->first('salary', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hire_date" class="form-label">{{ __('Hire Date') }}</label>
            <input type="date" name="hire_date" class="form-control @error('hire_date') is-invalid @enderror"
           value="{{ old('hire_date', $employee->hire_date ?? '') }}" id="hire_date">
            @error('hire_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>