<div>
    @if (!empty($errorMessage))
        <div class="alert alert-danger">
            {{ $errorMessage }}
        </div>
    @endif

    <div class="flex justify-evenly py-4">
        <div class="flex items-center">
            <svg class="w-7 h-7 items-center mr-4" fill="#f6f5f4" version="1.1" id="Layer_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 226.777 226.777"
                enable-background="new 0 0 226.777 226.777" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path id="BTC_alt_1_"
                        d="M182.981,112.854c-7.3-5.498-17.699-7.697-17.699-7.697s8.8-5.102,12.396-10.199 c3.6-5.099,5.399-12.999,5.7-17.098c0.299-4.101,1-21.296-12.399-31.193c-10.364-7.658-22.241-10.698-38.19-11.687V0.278h-21.396 V34.57c-4.774,0-10.353,0-16.297,0V0.278H73.702V34.57c-21.841,0-42.092,0-42.092,0v22.219c0,0,8.998,0,12.372,0 c3.373,0,9.372,0.375,11.921,3.228c2.55,2.848,3,4.349,3,9.895c0,5.548,0.001,86.435,0.001,88.535c0,2.099-0.4,4.697-2.201,6.398 c-1.798,1.701-3.597,2.098-7.898,2.098c-4.3,0-12.796,0-12.796,0l-4.399,25.698c0,0,20.918,0,42.092,0v34.195h21.395v-34.195 c6.574,0,12.298,0,16.297,0v34.195h21.396v-34.759c5.531-0.323,10.688-0.742,13.696-1.136c6.1-0.798,19.896-2.398,32.796-11.397 c12.896-9,15.793-23.098,16.094-37.294C195.68,128.053,190.274,118.353,182.981,112.854z M95.096,58.766 c0,0,6.798-0.599,13.497-0.501c6.701,0.099,12.597,0.3,21.398,3c8.797,2.701,13.992,9.3,14.196,17.099 c0.199,7.799-3.204,12.996-9.2,16.296c-5.998,3.299-14.292,5.099-22.094,5.396c-7.797,0.301-17.797,0-17.797,0V58.766z M142.986,161.045c-4.899,2.701-14.698,5.1-24.194,5.798c-9.499,0.701-23.696,0.401-23.696,0.401v-45.893c0,0,13.598-0.698,24.197,0 c10.597,0.703,19.495,3.4,23.492,5.403c3.999,1.998,11,6.396,11,16.896C153.785,154.146,147.882,158.346,142.986,161.045z">
                    </path>
                </g>
            </svg>
            <p class="text-neutral-200 text-2xl">${{ number_format($btcPrice, 2) }}</p>
        </div>
        <div class="flex items-center">
            <svg class="w-7 h-7 items-center mr-4" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 226.777 226.777"
                enable-background="new 0 0 226.777 226.777" xml:space="preserve" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g>
                        <polygon fill="#f6f5f4" points="112.553,157 112.553,86.977 44.158,116.937 "></polygon>
                        <polygon fill="#f6f5f4" points="112.553,82.163 112.553,-0.056 46.362,111.156 "></polygon>
                        <polygon fill="#f6f5f4" points="116.962,-0.09 116.962,82.163 184.083,111.566 "></polygon>
                        <polygon fill="#f6f5f4" points="116.962,86.977 116.962,157.002 185.405,116.957 "></polygon>
                        <polygon fill="#f6f5f4" points="112.553,227.406 112.553,171.085 44.618,131.31 "></polygon>
                        <polygon fill="#f6f5f4" points="116.962,227.406 184.897,131.31 116.962,171.085 "></polygon>
                    </g>
                </g>
            </svg>
            <p class="text-neutral-200 text-2xl">${{ number_format($ethPrice, 2) }}</p>
        </div>
    </div>
</div>
