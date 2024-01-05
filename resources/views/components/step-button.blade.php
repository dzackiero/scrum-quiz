@props(['step', 'currentStep'])

@php
if ($currentStep > $step) {
$bgColor = 'bg-primary-500';
$textColor = 'text-white';
} else {
$bgColor = 'bg-gray-200';
$textColor = 'text-black';
}
@endphp

@if ($step == $currentStep)
<div class="size-14 bg-primary-600 bg-opacity-50 rounded-full grid place-items-center flex-none">
    <button type="button" class="rounded-full flex-none {{ $bgColor }} {{ $textColor }} size-10 font-semibold text-xl"
        wire:click="jumpToStep({{ $step }})">{{ $step }}</button>
</div>
@else
<button type="button" class="rounded-full flex-none {{ $bgColor }} {{ $textColor }} size-12 font-semibold text-xl"
    wire:click="jumpToStep({{ $step }})">{{ $step }}</button>
@endif