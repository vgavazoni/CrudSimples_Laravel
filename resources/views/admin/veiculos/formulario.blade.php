
<div class="form-row">
      <div class="form-group col-md-6">
          @php
                $label = 'Placa';
                $placeholder = 'Digite a '. $label;
                $name = 'placa';
                $type = 'text';
                $valid = 'Looks good!';
          @endphp


        <label for="{{$name}}">{{$label}}</label>
          <input type="{{$type}}" name="{{$name}}" id='{{$name}}' class="form-control {{$errors->has($name) ? 'is-invalid' : (old($name) ? 'is-valid' : '')}}" placeholder="{{$placeholder}}" value="{{ old($name) ?? $registro->{$name} ?? '' }}">
          @if ($errors->has($name))
              <div class="invalid-feedback">
                    {{ $errors->first($name) }}
              </div>
          @elseif (old($name))
              <div class="valid-feedback">
                  {{$valid}}
              </div>
          @endif
      </div>
      <div class="form-group col-md-6">
          @php
                $label = 'Modelo';
                $placeholder = 'Digite o '. $label;
                $name = 'modelo';
                $type = 'text';
                $valid = 'Looks good!';
          @endphp


        <label for="{{$name}}">{{$label}}</label>
          <input type="{{$type}}" name="{{$name}}" id='{{$name}}' class="form-control {{$errors->has($name) ? 'is-invalid' : (old($name) ? 'is-valid' : '')}}" placeholder="{{$placeholder}}" value="{{ old($name) ?? $registro->{$name} ?? '' }}">
          @if ($errors->has($name))
              <div class="invalid-feedback">
                    {{ $errors->first($name) }}
              </div>
          @elseif (old($name))
              <div class="valid-feedback">
                  {{$valid}}
              </div>
          @endif
      </div>
      <div class="form-group col-md-6">
          @php
                $label = 'Ano';
                $placeholder = 'Digite o '. $label;
                $name = 'ano';
                $type = 'text';
                $valid = 'Looks good!';
          @endphp


        <label for="{{$name}}">{{$label}}</label>
          <input type="{{$type}}" name="{{$name}}" id='{{$name}}' class="form-control {{$errors->has($name) ? 'is-invalid' : (old($name) ? 'is-valid' : '')}}" placeholder="{{$placeholder}}" value="{{ old($name) ?? $registro->{$name} ?? '' }}">
          @if ($errors->has($name))
              <div class="invalid-feedback">
                    {{ $errors->first($name) }}
              </div>
          @elseif (old($name))
              <div class="valid-feedback">
                  {{$valid}}
              </div>
          @endif
      </div>
      <div class="form-group col-md-6">
          @php
                $label = 'Marca';
                $placeholder = 'Digite a '. $label;
                $name = 'marca';
                $type = 'text';
                $valid = 'Looks good!';
          @endphp


        <label for="{{$name}}">{{$label}}</label>
          <input type="{{$type}}" name="{{$name}}" id='{{$name}}' class="form-control {{$errors->has($name) ? 'is-invalid' : (old($name) ? 'is-valid' : '')}}" placeholder="{{$placeholder}}" value="{{ old($name) ?? $registro->{$name} ?? '' }}">
          @if ($errors->has($name))
              <div class="invalid-feedback">
                    {{ $errors->first($name) }}
              </div>
          @elseif (old($name))
              <div class="valid-feedback">
                  {{$valid}}
              </div>
          @endif
      </div>
      <div class="form-group col-md-6">
          @php
                $label = 'Chassi';
                $placeholder = 'Digite o '. $label;
                $name = 'chassi';
                $type = 'text';
                $valid = 'Looks good!';
          @endphp


        <label for="{{$name}}">{{$label}}</label>
          <input type="{{$type}}" name="{{$name}}" id='{{$name}}' class="form-control {{$errors->has($name) ? 'is-invalid' : (old($name) ? 'is-valid' : '')}}" placeholder="{{$placeholder}}" value="{{ old($name) ?? $registro->{$name} ?? '' }}">
          @if ($errors->has($name))
              <div class="invalid-feedback">
                    {{ $errors->first($name) }}
              </div>
          @elseif (old($name))
              <div class="valid-feedback">
                  {{$valid}}
              </div>
          @endif
      </div>
      <div class="form-group col-md-6">
          @php
                $label = 'Renavam';
                $placeholder = 'Digite o '. $label;
                $name = 'renavam';
                $type = 'text';
                $valid = 'Looks good!';
          @endphp


        <label for="{{$name}}">{{$label}}</label>
          <input type="{{$type}}" name="{{$name}}" id='{{$name}}' class="form-control {{$errors->has($name) ? 'is-invalid' : (old($name) ? 'is-valid' : '')}}" placeholder="{{$placeholder}}" value="{{ old($name) ?? $registro->{$name} ?? '' }}">
          @if ($errors->has($name))
              <div class="invalid-feedback">
                    {{ $errors->first($name) }}
              </div>
          @elseif (old($name))
              <div class="valid-feedback">
                  {{$valid}}
              </div>
          @endif
      </div>
      <div class="form-group col-md-6">
          @php
                $label = 'Cor';
                $placeholder = 'Digite a '. $label;
                $name = 'cor';
                $type = 'text';
                $valid = 'Looks good!';
          @endphp


        <label for="{{$name}}">{{$label}}</label>
          <input type="{{$type}}" name="{{$name}}" id='{{$name}}' class="form-control {{$errors->has($name) ? 'is-invalid' : (old($name) ? 'is-valid' : '')}}" placeholder="{{$placeholder}}" value="{{ old($name) ?? $registro->{$name} ?? '' }}">
          @if ($errors->has($name))
              <div class="invalid-feedback">
                    {{ $errors->first($name) }}
              </div>
          @elseif (old($name))
              <div class="valid-feedback">
                  {{$valid}}
              </div>
          @endif
      </div>
      <div class="form-group col-md-6">
          @php
                $label = 'Seguradora';
                $placeholder = 'Digite a '. $label;
                $name = 'seguradora';
                $type = 'text';
                $valid = 'Looks good!';
          @endphp


        <label for="{{$name}}">{{$label}}</label>
          <input type="{{$type}}" name="{{$name}}" id='{{$name}}' class="form-control {{$errors->has($name) ? 'is-invalid' : (old($name) ? 'is-valid' : '')}}" placeholder="{{$placeholder}}" value="{{ old($name) ?? $registro->{$name} ?? '' }}">
          @if ($errors->has($name))
              <div class="invalid-feedback">
                    {{ $errors->first($name) }}
              </div>
          @elseif (old($name))
              <div class="valid-feedback">
                  {{$valid}}
              </div>
          @endif
      </div>
      <div class="form-group col-md-6">
          @php
                $label = 'Status';
                $placeholder = 'Selecione o '. $label;
                $name = 'status';
                $type = 'number';
                $valid = 'Looks good!';
          @endphp


        <label for="{{$name}}">{{$label}}</label>
        <select class="form-control {{$errors->has($name) ? 'is-invalid' : (old($name) ? 'is-valid' : '')}}" >
            <option>Qual o status do veículo?</option>
            @foreach ($lista as $key => $value)
                <option type="{{$type}}" name="{{$name}}" id='{{$name}}' value="{{ $key->id }}">{{$key->status}}</option>
            @endforeach


          @if ($errors->has($name))
              <div class="invalid-feedback">
                    {{ $errors->first($name) }}
              </div>
          @elseif (old($name))
              <div class="valid-feedback">
                  {{$valid}}
              </div>
          @endif
        </select>
      </div>
</div>
