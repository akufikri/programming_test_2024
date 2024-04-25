@extends('template')
@section('content')
    <section>
        <div class="max-w-xl mx-auto">
            <div class="flex gap-3">
                <div class="w-full">
                    <h1 class="mb-10">Example : 123456789</h1>
                    <form action="/math/pros/9" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="mb-3">
                                <label class="" for="number">9 Digits Input</label>
                            </div>
                            <input type="text" name="number" id="number" placeholder="Type here"
                                class="input input-bordered w-full" />
                        </div>
                        <button type="submit" class="btn">Submit</button>
                    </form>
                </div>

                <div class="w-full">
                    <h1 class="mb-10">Example : 39247</h1>
                    <form action="/math/pros/large" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="mb-3">
                                <label class="" for="number">5 Digits Input</label>
                            </div>
                            <input type="text" name="number" id="number" placeholder="Type here"
                                class="input input-bordered w-full" />
                        </div>
                        <button type="submit" class="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>


    </section>
@endsection
