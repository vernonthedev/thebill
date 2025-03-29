<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CurrencyRequest;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $currencies = Currency::latest()->paginate(10);
        return view('currencies.index', compact('currencies'));
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('currencies.create');
    }

    public function store(CurrencyRequest $request): \Illuminate\Http\RedirectResponse
    {
        Currency::create($request->validated());
        return redirect()->route('currencies.index')->with('success', 'Created successfully');
    }

    public function show(Currency $currency): \Illuminate\Contracts\View\View
    {
        return view('currencies.show', compact('currency'));
    }

    public function edit(Currency $currency): \Illuminate\Contracts\View\View
    {
        return view('currencies.edit', compact('currency'));
    }

    public function update(CurrencyRequest $request, Currency $currency): \Illuminate\Http\RedirectResponse
    {
        $currency->update($request->validated());
        return redirect()->route('currencies.index')->with('success', 'Updated successfully');
    }

    public function destroy(Currency $currency): \Illuminate\Http\RedirectResponse
    {
        $currency->delete();
        return redirect()->route('currencies.index')->with('success', 'Deleted successfully');
    }
}
