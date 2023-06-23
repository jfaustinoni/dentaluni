<div class="row g-3">
  <div class="col">
    <x-input-label for="name" :value="__('Nome')" class="form-label" />
    <x-text-input id="name" class="form-control" type="text" name="name" value="{{ old('name',  isset($dentist->name) ? $dentist->name : null) }}" required autofocus autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
  </div>
  <div class="col">
  <x-input-label for="email" :value="__('E-mail')" class="form-label"/>
    <x-text-input id="email" class="form-control" type="text" name="email" value="{{ old('email',  isset($dentist->email) ? $dentist->email : null) }}" required autofocus autocomplete="email" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
  </div>
</div>

<div class="row g-3 mt-3">
  <div class="col">
    <x-input-label for="cro" :value="__('CRO')" class="form-label" />
    <x-text-input id="cro" class="form-control" type="text" name="cro"  value="{{ old('cro',  isset($dentist->cro) ? $dentist->cro : null) }}" required autofocus autocomplete="cro" />
    <x-input-error :messages="$errors->get('cro')" class="mt-2" />
  </div>
  <div class="col">
    <x-input-label for="cro_uf" :value="__('CRO UF')" class="form-label" />
    <x-text-input id="cro_uf" class="form-control" type="text" name="cro_uf"  value="{{ old('cro_uf',  isset($dentist->cro_uf) ? $dentist->cro_uf : null) }}" required autofocus autocomplete="cro_uf" />
    <x-input-error :messages="$errors->get('cro_uf')" class="mt-2" />
  </div>
  <div class="col">
    <x-input-label for="specialties" :value="__('Especialidades')" class="form-label" />
    <select class="select2 form-control select2-multiple" id="multiple" multiple="" tabindex="-1" aria-hidden="true" required name="specialties[]">
        @foreach($specialties as $specialty)
            <option value="{{$specialty->id}}" @if(isset($dentist) && $dentist->specialties->containsStrict('id', $specialty->id)) selected="selected" @endif>{{$specialty->name}}</option>
        @endforeach
    </select>
  </div>
</div>
<div class="row g-3 mt-4">
    <div class="col">
        <x-primary-button class="btn btn-success">
            {{ __('Salvar') }}
        </x-primary-button>
    </div>
</div>




