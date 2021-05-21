<div>
    @if($form ?? false)
        <livewire:fields :form="$form->id"/>
    @else
        <table>
            <thead>
            <tr>
                <th>
                    {{ __('laravelautoforms::autoforms.form_name') }}
                </th>
                <th>
                    {{ __('laravelautoforms::autoforms.submissions') }}
                </th>
                <th>
                    {{ __('laravelautoforms::autoforms.created_at') }}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($forms ?? [] as $form)
                <tr wire:click="edit('{{ $form['id'] }}')" wire:key="{{ $form['id'] }}">
                    <td>{{ $form['name'] }}</td>
                    <td>{{ $form['submissions'] }}</td>
                    <td>{{ $form['created_at'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
