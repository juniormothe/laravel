<div class="row">
    <div class="col-12 mb-3">
        <table class="table mb-0">
            <thead class="bg-light">
                <tr>
                    <th scope="col" class="border-0">Nome</th>
                    <th scope="col" class="border-0" style="text-align: right">
                        ...
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $listValue)
                    <tr>
                        <td>
                            {{ Str::upper($listValue->name) }}
                        </td>
                        <td align="right">
                            <button wire:click="controlModule('view', '{{ Helper::hashIdEncode($listValue->id) }}')"
                                style="padding: 2px; padding-left: 3px; padding-right: 3px;" type="submit"
                                class="btn btn-sm btn-outline-secondary">
                                <i class="material-icons">visibility</i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td style="padding: 0px" colspan="10"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-12">
        {{ $list->links() }}
    </div>
</div>
