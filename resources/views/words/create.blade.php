{{-- resources/views/words/create.blade.php --}}

<div class="container py-4" style="max-width: 600px; margin: auto; font-family: sans-serif;">

    {{-- Header --}}
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <h1 style="margin:0; font-size: 24px;">➕ Add New Word</h1>
        <a href="{{ route('words.index') }}" 
           style="padding:8px 14px; background:#f1f1f1; border-radius:8px; text-decoration:none; color:#111; font-weight:500;">
            ← Back
        </a>
    </div>

    {{-- Error Messages --}}
    @if ($errors->any())
        <div style="padding:15px; background:#f8d7da; color:#721c24; border-radius:8px; margin-bottom:20px;">
            <ul style="margin:0; padding-left:20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Create Form --}}
    <div style="background:#fff; padding:30px; border-radius:12px; border:1px solid #eee; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
        <form action="{{ route('words.store') }}" method="POST">
            @csrf

            {{-- Word Input --}}
            <div style="margin-bottom:20px;">
                <label for="word" style="display:block; margin-bottom:8px; font-weight:600;">Word <span style="color:red;">*</span></label>
                <input type="text" name="word" id="word" value="{{ old('word') }}" required 
                       style="width:100%; padding:12px; border-radius:8px; border:1px solid #ddd; font-size:16px;"
                       placeholder="Enter original word...">
            </div>

            {{-- Language Select --}}
            <div style="margin-bottom:20px;">
                <label for="language_id" style="display:block; margin-bottom:8px; font-weight:600;">Language <span style="color:red;">*</span></label>
                <select name="language_id" id="language_id" required 
                        style="width:100%; padding:12px; border-radius:8px; border:1px solid #ddd; font-size:16px; background:#fff;">
                    <option value="">Select Language</option>
                    @foreach($languages as $language)
                        <option value="{{ $language->id }}" {{ old('language_id') == $language->id ? 'selected' : '' }}>
                            {{ $language->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Farsi Meaning --}}
            <div style="margin-bottom:20px;">
                <label for="meaning" style="display:block; margin-bottom:8px; font-weight:600;">Farsi Meaning (Optional)</label>
                <input type="text" name="meaning" id="meaning" value="{{ old('meaning') }}"
                       style="width:100%; padding:12px; border-radius:8px; border:1px solid #ddd; font-size:16px;" 
                       placeholder="معنی به فارسی...">
            </div>

            {{-- English Meaning --}}
            <div style="margin-bottom:20px;">
                <label for="meaning_en" style="display:block; margin-bottom:8px; font-weight:600;">English Meaning (Optional)</label>
                <input type="text" name="meaning_en" id="meaning_en" value="{{ old('meaning_en') }}"
                       style="width:100%; padding:12px; border-radius:8px; border:1px solid #ddd; font-size:16px;"
                       placeholder="Meaning in English...">
            </div>

            {{-- Submit Button --}}
            <button type="submit" 
                    style="width:100%; padding:14px; background:#111; color:#fff; border:none; border-radius:8px; font-size:16px; font-weight:bold; cursor:pointer; transition: 0.3s;">
                Save Word
            </button>
        </form>
    </div>

</div>
