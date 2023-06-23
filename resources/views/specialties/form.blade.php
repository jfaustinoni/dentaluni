<div class="row g-3">
  <div class="col">
    <x-input-label for="name" :value="__('Nome')" class="form-label" />
    <x-text-input id="name" class="form-control" type="text" name="name" value="{{ old('name',  isset($dentist->name) ? $dentist->name : null) }}" required autofocus autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
  </div>
</div>

<div class="row g-3 mt-4">
    <div class="col">
        <x-primary-button class="btn btn-success">
            {{ __('Salvar') }}
        </x-primary-button>
    </div>
</div>


