<div>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-12 mb-3">
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
                    <i class="material-icons">save</i> INSERIR
                </button>
            </div>
        </div>
    </form>
</div>
