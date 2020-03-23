@extends('layouts.templateStudents')

@section('title', 'Dashboard')

@section('content')

    <section class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    <h1 class="font-weight-800 text-2xl text-gray-800">Dashboard</h1>
    <p class="mr-8 mb-8 font-weight-500 text-gray-700">Hello, Sophi! Here, you can see an overview of all your assignments, overall grade, as well as your messages.</p>
        
    <h3 class="text-xl text-green-800">A</h3>
    <h5 class="text-md text-gray-800">600/650 - 92.307 %</h5>
    </section>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <h1 class="font-weight-800 text-xl text-gray-800">Assignments</h2>

        <table class="table-auto">
  <thead class="text-gray-700 font-weight-600">
    <tr>
      <th class="px-4 py-2">Assignment</th>
      <th class="px-4 py-2">Completed</th>
      <th class="px-4 py-2">Due</th>
      <th class="px-4 py-2">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2"><a href="/viewLesson/id/65676">Le Passé Composé</a></td>
      <td class="border px-4 py-2"><span class="text-green-400">&#10003;</span></td>
      <td class="border px-4 py-2">3/24/2020 15:00 (Tues.)</td>
      <td class="border px-4 py-2">78/100 (C+)</td>
    </tr>
    <tr>
      <td class="border px-4 py-2"><a href="/viewLesson/id/65676">Le Passé Anterieur</a></td>
      <td class="border px-4 py-2"><span class="text-green-400">&#10003;</span></td>
      <td class="border px-4 py-2">3/25/2020 15:00 (Wed.)</td>
      <td class="border px-4 py-2">100/100 (A+)</td>
    </tr>
    <tr>
    <tr>
      <td class="border px-4 py-2"><a href="/viewLesson/id/65676">Writing Assignment - Passé Composé</a></td>
      <td class="border px-4 py-2"><span class="text-red-600">&#10008;</span></td>
      <td class="border px-4 py-2">3/25/2020 15:00 (Wed.)</td>
      <td class="border px-4 py-2">N/A</td>
    </tr>
  </tbody>
</table>

    </div>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col ">
        <h2 class="font-weight-800 text-xl text-gray-800">Messages</h2>

        <table class="table-auto">
  <thead class="text-gray-700 font-weight-600">
    <tr>
      <th class="px-4 py-2">Message</th>
      <th class="px-4 py-2">From</th>
      <th class="px-4 py-2">Sent</th>
      <th class="px-4 py-2">Read &#10003;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2"><a href="/Message/user/154">Hey, Sophi! To answer your question, you need to conjugate the verb in the imperfect tense before...</a></td>
      <td class="border px-4 py-2"><span class="text-blue-600 text-underline">Bill Valentine</span></td>
      <td class="border px-4 py-2">3/24/2020 15:00</td>
      <td class="border px-4 py-2">       <button class="bg-blue hover:bg-blue-dark text-gray-600 font-bold py-2 px-4 rounded" type="button">
            Read
        </button></td>
    </tr>
    <tr>
      <td class="border px-4 py-2"><a href="/Message/user/154">Hey, Sophi! To answer your question, you need to conjugate the verb in the imperfect tense before...</a></td>
      <td class="border px-4 py-2"><span class="text-blue-600 text-underline">Bill Valentine</span></td>
      <td class="border px-4 py-2">3/24/2020 15:00</td>
      <td class="border px-4 py-2">       <button class="bg-blue hover:bg-blue-dark text-gray-600 font-bold py-2 px-4 rounded" type="button">
            Read
        </button></td>
    </tr>
    <tr>
    <tr>
      <td class="border px-4 py-2"><a href="/Message/user/154">Hey, Sophi! To answer your question, you need to conjugate the verb in the imperfect tense before...</a></td>
      <td class="border px-4 py-2"><span class="text-blue-600 text-underline">Bill Valentine</span></td>
      <td class="border px-4 py-2">3/24/2020 15:00</td>
      <td class="border px-4 py-2">       <button class="bg-blue hover:bg-blue-dark text-gray-600 font-bold py-2 px-4 rounded" type="button">
            Read
        </button></td>
    </tr>
  </tbody>
</table>

    </div>
@endsection

