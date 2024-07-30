<div class="row">
    <div class="col-12 mb-2">
        <h6 style="margin: 0px">{{ Str::upper($data->name) }}</h6>
    </div>
    <div class="col-12 mb-3">
        <hr style="margin: 0px">
    </div>
    <div class="col-12">
        <form wire:submit.prevent="save">
            <div class="row">
                <div class="col-9 mb-3">
                    <strong class="d-block mb-1">Nome</strong>
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
                <div class="col-12">
                    <button type="submit" class="btn btn-sm btn-outline-secondary btn-block">
                        <i class="material-icons">save</i> EDITAR
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
