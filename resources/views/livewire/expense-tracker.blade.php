<div>
    <form wire:submit.prevent="addExpense">
        <input wire:model="description" placeholder="Descrição">
        <input wire:model="amount" type="number" step="0.01">
        <input wire:model="date" type="date">
        <select wire:model="category_id">
            <option value="">Sem categoria</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
        <button type="submit">Adicionar</button>
    </form>

    <hr>

    <label>Filtrar mês:</label>
    <select wire:model="filterMonth">
        @for($i = 1; $i <= 12; $i++)
            <option value="{{ $i }}">{{ \Carbon\Carbon::create()->month($i)->format('F') }}</option>
        @endfor
    </select>

    <label>Filtrar categoria:</label>
    <select wire:model="filterCategory">
        <option value="">Todas</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>

    <table>
        <thead>
            <tr>
                <th>Data</th><th>Descrição</th><th>Valor</th><th>Categoria</th><th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expenses as $e)
                <tr>
                    <td>{{ $e->date }}</td>
                    <td>{{ $e->description }}</td>
                    <td>€{{ $e->amount }}</td>
                    <td>{{ $e->category->name ?? '-' }}</td>
                    <td>
                        <button wire:click="delete({{ $e->id }})">🗑</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h4>Total: €{{ $total }}</h4>

    @if($budgetExceeded)
        <div style="color: red">🚨 Você ultrapassou o orçamento do mês!</div>
    @endif
</div>
