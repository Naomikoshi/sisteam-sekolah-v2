@props(['status'])

@php
    $normalized = strtolower(trim((string) $status));
    $classes = match ($normalized) {
        'aktif' => 'inline-flex items-center rounded-full border border-emerald-200 bg-emerald-50 px-2.5 py-1 text-[11px] font-semibold uppercase tracking-[0.12em] text-emerald-700',
        'tidak aktif', 'nonaktif', 'non-aktif' => 'inline-flex items-center rounded-full border border-red-200 bg-red-50 px-2.5 py-1 text-[11px] font-semibold uppercase tracking-[0.12em] text-red-700',
        default => 'inline-flex items-center rounded-full border border-slate-200 bg-slate-100 px-2.5 py-1 text-[11px] font-semibold uppercase tracking-[0.12em] text-slate-600',
    };
@endphp

<span class="{{ $classes }}">{{ $status }}</span>
