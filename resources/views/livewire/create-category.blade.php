<div>
    <form wire:submit.prevent="createCategory">
        <div>
            <label for="category_name">카테고리 이름 추가</label>
            <input type="text" wire:model="category_name" id="category_name" required>
            @error('category_name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">카테고리 추가</button>
    </form>
</div>