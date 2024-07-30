<ol class="breadcrumb mb-0">
    <li class="breadcrumb-item">
        <h5 class="mb-0">Example <small style="font-size: 14px; color: #666">(item)</small></h5>
    </li>
    <li class="breadcrumb-item">
        <table>
            <tr>
                <td style="padding-right: 10px">
                    <select wire:model="module" class="form-control" style="height: 28px; margin: 0px; padding-top: 5px;">
                        <option value="view">
                            Visualizar
                        </option>
                        <option value="edit">
                            Editar
                        </option>
                        <option value="delete">
                            Excluir
                        </option>
                    </select>
                </td>
                <td>
                    <button wire:click="controlModule('home')"
                        style="padding: 4px; padding-left: 6px; padding-right: 6px;" type="submit"
                        class="btn btn-sm btn-outline-secondary">
                        <i class="material-icons">close</i>
                    </button>
                </td>
            </tr>
        </table>
    </li>
</ol>
