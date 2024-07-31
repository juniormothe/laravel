<div>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-{{ $type == 1 ? 12 : 9 }} mb-3">
                <strong class="d-block mb-1">Nome *</strong>
                <div class="input-group">
                    <div class="input-group input-group-seamless">
                        <input wire:model="input.name" type="text"
                            class="form-control @error('input.name') is-invalid @enderror" id="form1-username">
                        @error('input.name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            @if ($type == 2)
                <div class="col-3 mb-3">
                    <strong class="d-block mb-1">Status *</strong>
                    <div class="input-group">
                        <div class="input-group input-group-seamless">
                            <select wire:model="input.status"
                                class="form-control @error('input.status') is-invalid @enderror">
                                <option value=""> </option>
                                <option value="1">Ativo</option>
                                <option value="2">Inativo</option>
                            </select>
                            @error('input.status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-12">
                <button type="submit" class="btn btn-sm btn-secondary btn-block">
                    <i class="material-icons">save</i> {{ $type == 1 ? 'INSERIR' : 'EDITAR' }}
                </button>
            </div>
        </div>
    </form>
</div>
