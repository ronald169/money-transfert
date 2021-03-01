<div>
    {{-- Stop trying to control. --}}

    <div>
        <input type="text" wire:model="amount">

        <select name="currency" id="" wire:model="currentSelected">
            <option value="dollar" selected>Dollar</option>
            <option value="euro">Euro</option>
            <option value="sterling">livre sterling</option>
        </select>
    </div>

    <div>
        Avec frais <span class="text-lg font-thin">{{'$'. $this->converted }}</span>
    </div>

</div>
