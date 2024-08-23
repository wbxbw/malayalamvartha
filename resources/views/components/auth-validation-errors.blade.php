@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <!-- <div class="font-medium text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div> -->
        <div class="alert alert-danger mb-0 alert-sa-has-icon" role="alert">
            <div class="alert-sa-icon">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="1em"
                    height="1em"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-info"
                >
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
            </div>
            <div class="alert-sa-content"> {{ __('Whoops! Something went wrong.') }}</div>
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
