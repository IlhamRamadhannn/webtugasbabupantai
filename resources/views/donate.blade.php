@extends('layout.master')

@section('content')
<div class="container mt-5">
    <br><br>
</div>

<div class="container mt-3">
    <div class="text-center mb-5 font-weight-bold">
        <h1 class="display-4" style="color: white;">{{ __('donate.title') }}</h1>

        <a href="{{ route('transaksi.store') }}" class="btn btn-primary btn-lg mt-4">{{ __('donate.donatebutton') }}</a>
    </div>

    <div class="text-center mb-5">
        <div style="display: inline-block; background-color: #007bff; color: white; padding: 20px 40px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <h2 style="font-size: 2rem; margin: 0; font-weight: bold;">{{ __('donate.total') }}</h2>
            <p style="font-size: 3rem; margin: 0; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                Rp {{ number_format($totalDonations, 0, ',', '.') }}
            </p>
        </div>
    </div>

    <h2 class="text-center mb-4" style="color: white; font-size: 3rem;">{{ __('donate.top') }}</h2>

    <div class="container">
        <div style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4); padding: 40px; border-radius: 10px;">
            <table class="table text-center" style="color: white;">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>{{ __('donate.donor') }}</th>
                        <th>{{ __('donate.amt') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donations as $index => $donation)
                        <tr>
                            <td>
                                @if ($index === 0)
                                    <span style="background-color: gold; color: black; font-size: 1.5rem; padding: 5px 10px; border-radius: 8px; display: inline-block; font-weight: bold;">
                                        {{ $index + 1 }}
                                    </span>
                                @elseif ($index === 1)
                                    <span style="background-color: silver; color: black; font-size: 1.5rem; padding: 5px 10px; border-radius: 8px; display: inline-block; font-weight: bold;">
                                        {{ $index + 1 }}
                                    </span>
                                @elseif ($index === 2)
                                    <span style="background-color: #cd7f32; color: black; font-size: 1.5rem; padding: 5px 10px; border-radius: 8px; display: inline-block; font-weight: bold;">
                                        {{ $index + 1 }}
                                    </span>
                                @else
                                    {{ $index + 1 }}
                                @endif
                            </td>
                            <td style="{{ $index < 3 ? 'font-size: 1.5rem;' : '' }}">{{ $donation->user->name }}</td>
                            <td style="{{ $index < 3 ? 'font-size: 1.5rem;' : '' }}">Rp {{ number_format($donation->total_amount, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

