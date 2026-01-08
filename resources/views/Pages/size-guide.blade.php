@extends('layouts.app')

@section('title', 'Size Guide - AURA KURTIS')

@section('content')
<section class="py-10 sm:py-14 bg-[#faf8f6]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">

        <!-- Heading -->
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-[#654321] mb-8 text-center">
            Size Guide
        </h1>

        <!-- Intro -->
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-10">
            Find your perfect fit with our detailed size guide. All measurements are in <strong>inches</strong> 
            and are taken manually to ensure accuracy and comfort.
        </p>

        <!-- How to Measure -->
        <div class="bg-white rounded-xl shadow-md p-6 sm:p-8 mb-10">
            <h2 class="text-xl sm:text-2xl font-serif font-bold text-[#654321] mb-4">
                How to Measure Yourself
            </h2>

            <div class="grid sm:grid-cols-2 gap-6 text-gray-700">
                <p><strong>Chest:</strong> Measure around the fullest part of your bust, keeping the tape snug but not tight.</p>
                <p><strong>Waist:</strong> Measure around the narrowest part of your waist.</p>
                <p><strong>Hips:</strong> Measure around the fullest part of your hips.</p>
                <p><strong>Kurti Length:</strong> Measure from the top of the shoulder down to your preferred hemline.</p>
            </div>
        </div>

        <!-- Size Chart -->
        <div class="bg-white rounded-xl shadow-md p-6 sm:p-8 mb-10 overflow-x-auto">
            <h2 class="text-xl sm:text-2xl font-serif font-bold text-[#654321] mb-6">
                Kurti Size Chart
            </h2>

            <table class="w-full border-collapse text-sm sm:text-base">
                <thead>
                    <tr class="bg-[#f3ede8] text-[#654321]">
                        <th class="border p-3 text-left">Size</th>
                        <th class="border p-3">Chest</th>
                        <th class="border p-3">Waist</th>
                        <th class="border p-3">Hips</th>
                        <th class="border p-3">Length</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr>
                        <td class="border p-3 font-semibold">XS</td>
                        <td class="border p-3 text-center">32</td>
                        <td class="border p-3 text-center">26</td>
                        <td class="border p-3 text-center">34</td>
                        <td class="border p-3 text-center">44</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 font-semibold">S</td>
                        <td class="border p-3 text-center">34</td>
                        <td class="border p-3 text-center">28</td>
                        <td class="border p-3 text-center">36</td>
                        <td class="border p-3 text-center">44</td>
                    </tr>
                    <tr>
                        <td class="border p-3 font-semibold">M</td>
                        <td class="border p-3 text-center">36</td>
                        <td class="border p-3 text-center">30</td>
                        <td class="border p-3 text-center">38</td>
                        <td class="border p-3 text-center">45</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 font-semibold">L</td>
                        <td class="border p-3 text-center">38</td>
                        <td class="border p-3 text-center">32</td>
                        <td class="border p-3 text-center">40</td>
                        <td class="border p-3 text-center">45</td>
                    </tr>
                    <tr>
                        <td class="border p-3 font-semibold">XL</td>
                        <td class="border p-3 text-center">40</td>
                        <td class="border p-3 text-center">34</td>
                        <td class="border p-3 text-center">42</td>
                        <td class="border p-3 text-center">46</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 font-semibold">XXL</td>
                        <td class="border p-3 text-center">42</td>
                        <td class="border p-3 text-center">36</td>
                        <td class="border p-3 text-center">44</td>
                        <td class="border p-3 text-center">46</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Fit Guide -->
        <div class="bg-white rounded-xl shadow-md p-6 sm:p-8 mb-10">
            <h2 class="text-xl sm:text-2xl font-serif font-bold text-[#654321] mb-4">
                Fit Guide
            </h2>

            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li><strong>Regular Fit:</strong> Comfortable everyday wear with ease of movement.</li>
                <li><strong>Slim Fit:</strong> Slightly fitted look for a modern silhouette.</li>
                <li><strong>Relaxed Fit:</strong> Loose and breathable, perfect for all-day comfort.</li>
            </ul>
        </div>

        <!-- Tips & Notes -->
        <div class="bg-white rounded-xl shadow-md p-6 sm:p-8">
            <h2 class="text-xl sm:text-2xl font-serif font-bold text-[#654321] mb-4">
                Important Notes
            </h2>

            <div class="text-gray-700 space-y-3">
                <p>• Measurements may vary by <strong>0.5 – 1 inch</strong> due to manual measuring.</p>
                <p>• If you are between two sizes, we recommend choosing the <strong>larger size</strong>.</p>
                <p>• Fabric type and design may affect the final fit.</p>
                <p>• For custom sizing or assistance, feel free to contact our support team.</p>
            </div>
        </div>

    </div>
</section>
@endsection
