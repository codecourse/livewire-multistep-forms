<div>
    {{ json_encode($state) }}
    
    @if ($step === 1) <livewire:post-form-title :state="$state" /> @endif
    @if ($step === 2) <livewire:post-form-body :state="$state" /> @endif
    @if ($step === 3) <livewire:post-form-publishing :state="$state" /> @endif
</div>
