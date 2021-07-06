<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <title>Budz</title>
    <style>
        * {
            position: relative;
            font-family: Rockwell, sans-serif;
        }

        * .material-icons-outlined,
        * .material-icons {
            font-size: inherit;
        }

    </style>
</head>

<body style="background: #e9e9e9">
    <div id="app" class="flex flex-col h-screen">
        <div class="p-8">
            <div class="z-50">
                <div class="absolute z-50 p-8 pt-40 -m-8 bg-green-800 rounded-br-lg shadow-xl" v-if="menuOpen">
                    <x-btn href="/products" icon="format_list_bulleted" text="Products" />
                    <x-btn icon="shopping_cart" text="Orders" />
                    <div class="flex justify-between text-white">
                        <div>Help</div>
                        <div>Contact</div>
                    </div>
                </div>
                <div class="flex items-center pb-4">
                    @verbatim
                        <div class="z-50 flex w-1/3 pt-6">
                            <div>
                                <div @click="menuOpen = !menuOpen" class="mb-8 text-white bg-red-500 rounded-full shadow-lg"
                                    style="width: 4rem; padding-top: 100%">
                                    <div
                                        class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full text-5xl">
                                        <i class="absolute material-icons-outlined">{{ menuOpen ? 'close' : 'menu' }}</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endverbatim
                    <div class="flex justify-center w-1/3">
                        <div style="width: 6.5rem" class="-mr-4 ">
                            <img src="{{ asset('img/bud_logo.png') }}" alt="" class="align-top">
                        </div>
                    </div>
                    <div class="w-1/3">
                    </div>
                </div>
                <div>
                    @yield('header')
                    <div class="absolute top-0 right-0 ">
                        <div class="mb-8 text-white bg-red-500 rounded-full shadow-lg"
                            style="width: 4rem; padding-top: 100%">
                            <div
                                class="absolute top-0 left-0 flex flex-col items-center justify-center w-full h-full text-5xl">
                                <i class="absolute material-icons-outlined">help_outline</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('breadcrumbs')
        </div>
        <div class="flex-1 p-8">@yield('content')</div>
        @include('partials.footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script>
        const app = new Vue({
            el: '#app',
            data: {
                menuOpen: false,
                selectedItems: [],
            },
            methods: {
                toggleItem(target) {
                    if (this.selectedItems.includes(target)) {
                        this.selectedItems = this.selectedItems.filter(item => item !== target);
                    } else {
                        this.selectedItems.push(target);
                    }
                    console.log(this.selectedItems)

                }
            }
        })

    </script>
</body>

</html>
