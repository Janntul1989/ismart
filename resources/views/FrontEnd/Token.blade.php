<!doctype html>
<html lang="en">


<head>
  <!-- Required Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">

  <!-- page title -->
  <title>Token of Livestock Farm </title>
  <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href={{asset("asset/assets/img/logo.jpg")}}>
    <link rel="icon" href={{asset("asset/assets/img/logo.jpg")}}>
    <link rel="stylesheet" href= {{asset("asset/assets/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("asset/assets/css/fontawesome_all.min.css")}}>
    <link rel="stylesheet" href= {{asset("asset/assets/css/ma5-menu.min.css")}}>
    <link rel="stylesheet" href={{asset("asset/assets/css/style.css")}}>
    <link rel="stylesheet" href={{asset("asset/assets/css/responsive.css")}}>

</head>

<body>
  <section class="body_wrapper">
    <div class="container">
      <!-- token_menu -->
      <div class="registration_menu_bar">
        <div class="menu_bar">
          <button class="ma5menu__toggle menu_button" type="button">
            <img src="{{asset("asset/assets/img/home.png")}}" alt="">
          </button>
          <ul class="site-menu">
            <li>
              <a href="index.html">হোম পেইজ</a>
            </li>
            <li>
              <a href="disease.html">রোগব্যাধি, টিকা ও প্রতিকার</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- token form -->
      <div id="get_service">
        <form class="token_form">
          <fieldset>
            <div class="form-group">
              <label class="control-label" for="full_name">পুরো
                নাম</label>
              <input id="full_name" name="full_name" placeholder="আপনার নাম লিখুন" class="form-control" type="text"
                required>
            </div>

            <div class="form-group">
              <label class="control-label" for="number">ফোন
                নাম্বার</label>
              <input id="number" name="number" placeholder="আপনার ফোন নাম্বার লিখুন" class="form-control" type="number"
                required>
            </div>

            <div class="form-group">
              <div class="form-check mb-3">
                <label class="form-check-label" for="animal">প্রাণী</label>
                <select class="form-select form-select-animal" aria-label=".form-select-animal">
                  <option value="" selected>নির্বাচন করুন</option>
                  <option value="cow">গরু </option>
                  <option value="buffalo">মহিষ</option>
                  <option value="goat">ছাগল</option>
                  <option value="sheep">ভেড়া</option>
                  <option value="horse">ঘোড়া</option>
                  <option value="dog">কুকুর</option>
                  <option value="cat">বিড়াল</option>
                  <option value="rabbit">খরগোশ</option>
                  <option value="hen">দেশী মুরগি</option>
                  <option value="duck">হাঁস</option>
                  <option value="broiler">ব্রয়লার</option>
                  <option value="sonali">সোনালী</option>
                  <option value="pigeon">কবুতর</option>
                  <option value="koel">কোয়েল</option>
                  <option value="dove">ঘুঘু</option>
                  <option value="bajrigar">বার্জারগার</option>
                  <option value="parrot">তোতাপাখি</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-check-label" for="bdaymonth">প্রাণীর
                বয়স ( মাস ও বছর )
              </label>
              <input type="date" class="form-control" id="bdaymonth" name="bdaymonth">
            </div>

            <div class="form-group">
              <label class="form-check-label" for="animal_number">প্রাণীর
                সংখ্যা
              </label>
              <input id="animal_number" name="animal_number" placeholder="আপনার প্রাণীর সংখ্যা লিখুন"
                class="form-control" type="number" required>
            </div>

            <div class="form-group">
              <label class="form-check-label" for="animal_weight">প্রাণীর
                ওজন
              </label>
              <input id="animal_weight" name="animal_weight" placeholder="আপনার প্রাণীর ওজন (কেজিতে) লিখুন"
                class="form-control" type="number" required>
            </div>

            <div class="form-group">
              <div class="form-check mb-3">
                <label class="form-check-label" for="animal">সেবাসমূহ</label>
                <select class="form-select form-select-service" aria-label=".form-select-service">
                  <option value="" selected>নির্বাচন করুন</option>
                  <option value="cow">ভ্যাকসিন
                  </option>
                  <option value="buffalo">চিকিৎসা</option>
                  <option value="goat">কৃত্রিম প্রজনন
                  </option>
                  <option value="sheep">প্রশিক্ষণ</option>
                  <option value="horse">গর্ভাবস্থা পরীক্ষা
                  </option>
                  <option value="dog">নিবন্ধনকরণ</option>
                  <option value="cat">ল্যাবরেটরি পরীক্ষা
                  </option>
                </select>
              </div>
            </div>

            <!-- symptom -->
            <div class="form-group">
              <div class="checkbox-container">
                <label for="optionsCheckbox">রোগের
                  লক্ষণ:</label>
                <input type="checkbox" id="optionsCheckbox">
                <div class="checkbox-options">
                  <label><input type="checkbox" value="অরুচি">অরুচি</label>
                  <label><input type="checkbox" value="জ্বর"> জ্বর</label>
                  <label><input type="checkbox" value="ব্যাথা">ব্যাথা</label>
                  <label><input type="checkbox" value="ফোলা">ফোলা</label>
                  <label><input type="checkbox" value="লালাভ">লালাভ</label>
                  <label><input type="checkbox" value="ক্ষুধা মন্দা">ক্ষুধা মন্দা</label>
                  <label><input type="checkbox" value="পাতলা পায়খানা">পাতলা পায়খানা</label>
                  <label><input type="checkbox" value="পানি শুন্যতা">পানি শুন্যতা</label>
                  <label><input type="checkbox" value="দূর্বলতা">দূর্বলতা</label>
                  <label><input type="checkbox" value="ঝিমুনি">ঝিমুনি</label>
                  <label><input type="checkbox" value="একপার্শে শুয়ে থাকা"> একপার্শে শুয়ে থাকা
                  </label>
                  <label><input type="checkbox" value="শক্ত পায়খানা"> শক্ত
                    পায়খানা</label>
                  <label><input type="checkbox" value="পেট ফাঁপা">
                    পেট ফাঁপা</label>
                  <label><input type="checkbox" value=" খুঁড়িয়ে চলা"> খুঁড়িয়ে
                    চলা</label>
                  <label><input type="checkbox" value=" লালা ঝরা">
                    লালা ঝরা</label>
                  <label><input type="checkbox" value="চোখ লালাভ">
                    চোখ লালাভ</label>
                  <label><input type="checkbox" value="চোখ দিয়ে পানি পড়া"> চোখ দিয়ে
                    পানি পড়া
                  </label>
                  <label><input type="checkbox" value="হাঁচি">
                    হাঁচি</label>
                  <label><input type="checkbox" value="ঘড়ঘড় শব্দ করা"> ঘড়ঘড় শব্দ করা
                  </label>
                  <label><input type="checkbox" value="রক্ত পড়া">রক্ত পড়া </label>
                  <label><input type="checkbox" value="গরম না হওয়া">গরম না
                    হওয়া</label>
                  <label><input type="checkbox" value="মাথা কাঁপানো">মাথা
                    কাঁপানো</label>
                  <label><input type="checkbox" value="ঘাড় বাঁকা">ঘাড় বাঁকা </label>
                  <label><input type="checkbox" value="আঘাত"> আঘাত
                  </label>
                  <label><input type="checkbox" value="পুড়ে যাওয়া"> পুড়ে
                    যাওয়া</label>
                  <label><input type="checkbox" value="কেটে যাওয়া"> কেটে যাওয়া</label>
                  <label><input type="checkbox" value="ছিলে যাওয়া"> ছিলে যাওয়া
                  </label>
                  <label><input type="checkbox" value="ঘা">ঘা</label>
                  <label><input type="checkbox" value="ক্ষত">ক্ষত
                  </label>
                  <label><input type="checkbox" value="ভেঙ্গে যাওয়া">ভেঙ্গে
                    যাওয়া</label>
                  <label><input type="checkbox" value="পায়ের পাতা ফোলা">পায়ের পাতা
                    ফোলা</label>
                  <label><input type="checkbox" value="পাখা ছেড়ে দেয়া">পাখা ছেড়ে
                    দেয়া</label>
                  <label><input type="checkbox" value="মলদ্বার ঝুলে থাকা">মলদ্বার ঝুলে
                    থাকা</label>
                  <label><input type="checkbox" value="ভ্যাজাইনা ঝুলে থাকা">ভ্যাজাইনা
                    ঝুলে থাকা
                  </label>
                  <label><input type="checkbox" value="জরায়ু ঝুলে থাকা">জরায়ু ঝুলে
                    থাকা
                  </label>
                  <label><input type="checkbox" value="শ্বাসকষ্ট">শ্বাসকষ্ট </label>
                  <label><input type="checkbox" value="পেট ফাঁপা">পেট ফাঁপা </label>
                  <label><input type="checkbox" value="কাশি">কাশি</label>
                  <label><input type="checkbox" value="সর্দি">সর্দি</label>
                  <label><input type="checkbox" value="ফোঁড়া ওঠা">ফোঁড়া ওঠা</label>
                  <label><input type="checkbox" value="বিষ খাওয়া">বিষ খাওয়া </label>
                  <label><input type="checkbox" value="খাবার ওগলানো">খাবার
                    ওগলানো</label>
                  <label><input type="checkbox" value="বমি করা">বমি করা</label>
                  <label><input type="checkbox" value="ঘন ঘন প্রস্রাব">ঘন ঘন প্রস্রাব
                  </label>
                  <label><input type="checkbox" value="প্রসাব বন্ধ">প্রসাব বন্ধ</label>
                  <label><input type="checkbox" value="পায়খানা বন্ধ"> পায়খানা বন্ধ
                  </label>
                  <label><input type="checkbox" value="দুধ বন্ধ">দুধ বন্ধ</label>
                  <label><input type="checkbox" value="ডিম কমে যাওয়া"> ডিম কমে
                    যাওয়া</label>
                  <label><input type="checkbox" value="শুকিয়ে যাওয়া"> শুকিয়ে যাওয়া
                  </label>
                </div>
                <div class="selected-options">
                  <div class="selected-options-list"></div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="myfile">প্রাণীর ছবি</label>
              <input type="file" id="myfile" name="myfile">
            </div>

            <div class="form-group mb-3">
              <label class="control-label" for="address">
                বর্ণনা</label>
              <textarea name="w3review" rows="5" style="width: 100%; border: 1px solid #ced4da;"></textarea>
            </div>

            <div class="form-group">
              <div class="form-check ">
                <input type="radio" name="call" id="call">
                <label class="form-check-label" for="call">দ্বারপ্রান্তে
                  ডাকুন</label>
              </div>
            </div>

            <!-- membership -->
            <div class="form-group mb-3">
              <h6 class="mb-2">সদস্যতাঃ</h6>
              <div class="membership_area">
                <button class="membership_btn" onclick="displayModal()">নির্বাচন করুন
                </button>

                <div id="package-info"></div>
              </div>

              <div id="myModal" class="modal">
                <div class="modal-content">
                  <span class="close" onclick="closeModal()">&times;</span>

                  <div class="selection_wrap">
                   

                    <div class="price_item one_month">
                      <h6>১ মাস</h6>
                      <h5><span>২১০</span> টাকা</h5>
                      <p>ভ্যাট + ট্যাক্স সহ</p>
                      <button onclick="displayPackageInfo('প্যাকেজ 2' , '১ মাস', '২১০ টাকা')">পছন্দ
                        করুন</button>
                    </div>

                    <div class="price_item three_month">
                      <h6>৩ মাস</h6>
                      <h5><span>৫৬৭</span> টাকা <del> ৬৩০<b>&#2547;</b></del>
                      </h5>
                      <p>১০% কমিশন (ভ্যাট + ট্যাক্স সহ)</p>
                      <button onclick="displayPackageInfo('প্যাকেজ ৩' , '৩ মাস', '৬৩০ টাকা')">পছন্দ
                        করুন</button>
                    </div>

                    <div class="price_item six_month">
                      <h6>৬ মাস</h6>
                      <h5><span>১০৭১</span> টাকা <del> ১২৬০<b>&#2547;</b></del>
                      </h5>
                      <p>১৫% কমিশন (ভ্যাট + ট্যাক্স সহ)</p>
                      <button onclick="displayPackageInfo('প্যাকেজ ৪' , '৬ মাস', '১২৬০টাকা')">পছন্দ
                        করুন</button>
                    </div>
                    <div class="price_item one_year">
                      <h6>১বছর</h6>
                      <h5><span>২০১৬</span> টাকা <del> ২৫২০<b>&#2547;</b></del>
                      </h5>
                      <p>২০% কমিশন (ভ্যাট + ট্যাক্স সহ)</p>
                      <button onclick="displayPackageInfo('প্যাকেজ ৪' , '১বছর', '২৫২০টাকা')">পছন্দ
                        করুন</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group bill">
              <p class="payment">পরিশোধ করুন</p>
              <div class="amount"></div>
              <span>টাকা</span>
            </div>

            <div class="form-group payment_area">
              <span class="payment_method">পেমেন্ট
                মেথড</span>

              <div class="payment_type">
                <ul class="nav nav-tabs" id="paymentTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="bikash-tab" data-bs-toggle="tab" data-bs-target="#bikash"
                      type="button" role="tab" aria-controls="bikash" aria-selected="true"><span
                        class="payment_icon"><img src="{{asset("asset/assets/img/bkash-logo-835789094A-seeklogo.com.png")}}"
                          alt=""></span></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nogod-tab" data-bs-toggle="tab" data-bs-target="#nogod" type="button"
                      role="tab" aria-controls="nogod" aria-selected="false"><span class="payment_icon"><img
                          src="{{asset("asset/assets/img/Nagad-Logo.wine.png")}}" alt=""></span></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="rocket-tab" data-bs-toggle="tab" data-bs-target="#rocket" type="button"
                      role="tab" aria-controls="rocket" aria-selected="false"><span class="payment_icon"><img
                          src="{{asset("asset/assets/img/rocket.png")}}" alt=""></span></button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="bikash" role="tabpanel" aria-labelledby="bikash-tab">
                    <div class="payment_info">
                      <h5>অনুগ্রহ করে প্রথমে পেমেন্ট করুন এবং
                        তারপর নিচের ফর্মটি পূরণ করুন। বিকাশের মাধ্যমে পেমেন্ট করুন, এই পদক্ষেপ
                        অনুসরণ করুন</h5>
                      <ol>
                        <li>আপনার বিকাশ অ্যাপে যান অথবা ডায়াল করুন *247#</li>
                        <li>"পেমেন্ট" চয়েজ করুন</li>
                        <li>নিচে বিকাশ অ্যাকাউন্ট নম্বর দিন</li>
                        <li>মোট পরিমাণ লিখুন</li>
                        <li>এখন আপনার বিকাশ অ্যাকাউন্টের পিন লিখুন প্রতি লেনদেন নিশ্চিত করুন
                        </li>
                        <li>পেমেন্ট থেকে লেনদেন আইডি কপি করুন নিশ্চিতকরণ বার্তা এবং পেস্ট করুন
                          যে বিকাশের নিচে লেনদেন আইডি "পেমেন্ট" ফি নেট মূল্যের সাথে যোগ করা
                          হবে।
                        </li>
                      </ol>
                      <p>বিকাশ মার্চেণ্ট নম্বর : 01721787141</p>
                    </div>

                    <div class="form-check">
                      <input id="bikash" name="payment" placeholder="বিকাশ নাম্বার" class="form-control" type="number"
                        required="">
                      <br>
                      <input id="bikash" name="payment" placeholder="১১ ডিজিটের Trans ID লিখুন" class="form-control"
                        type="number" required="">

                    </div>

                  </div>
                  <div class="tab-pane fade" id="nogod" role="tabpanel" aria-labelledby="nogod-tab">
                    <div class="payment_info">
                      <h5>অনুগ্রহ করে প্রথমে পেমেন্ট করুন এবং
                        তারপর নিচের ফর্মটি পূরণ করুন। নগদের মাধ্যমে পেমেন্ট করুন, এই পদক্ষেপ
                        অনুসরণ করুন</h5>
                      <ol>
                        <li>আপনার নগদ অ্যাপে যান অথবা ডায়াল করুন *167#</li>
                        <li>"পেমেন্ট" চয়েজ করুন</li>
                        <li>নিচে নগদ অ্যাকাউন্ট নম্বর দিন</li>
                        <li>মোট পরিমাণ লিখুন</li>
                        <li>এখন আপনার নগদ অ্যাকাউন্টের পিন লিখুন প্রতি লেনদেন নিশ্চিত করুন
                        </li>
                        <li>পেমেন্ট থেকে লেনদেন আইডি কপি করুন নিশ্চিতকরণ বার্তা এবং পেস্ট করুন
                          যে নগদের নিচে লেনদেন আইডি "পেমেন্ট" ফি নেট মূল্যের সাথে যোগ করা
                          হবে।
                        </li>
                      </ol>
                      <p>নগদ মার্চেণ্ট নম্বর : 01721787141</p>
                    </div>
                    <form>

                      <div class="form-check">
                        <input id="nogod" name="payment" placeholder="নগদ নাম্বার" class="form-control" type="number"
                          required="">
                        <br>
                        <input id="nogod" name="payment" placeholder="১১ ডিজিটের Trans ID লিখুন" class="form-control"
                          type="number" required="">
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="rocket" role="tabpanel" aria-labelledby="rocket-tab">
                    <div class="payment_info">
                      <h5>অনুগ্রহ করে প্রথমে পেমেন্ট করুন এবং
                        তারপর নিচের ফর্মটি পূরণ করুন। রকেটের মাধ্যমে পেমেন্ট করুন, এই পদক্ষেপ
                        অনুসরণ করুন</h5>
                      <ol>
                        <li>আপনার রকেট অ্যাপে যান অথবা ডায়াল করুন *322#</li>
                        <li>"পেমেন্ট" চয়েজ করুন</li>
                        <li>নিচে নগদ অ্যাকাউন্ট নম্বর দিন</li>
                        <li>মোট পরিমাণ লিখুন</li>
                        <li>এখন আপনার রকেট অ্যাকাউন্টের পিন লিখুন প্রতি লেনদেন নিশ্চিত করুন
                        </li>
                        <li>পেমেন্ট থেকে লেনদেন আইডি কপি করুন নিশ্চিতকরণ বার্তা এবং পেস্ট করুন
                          যে রকেটের নিচে লেনদেন আইডি "পেমেন্ট" ফি নেট মূল্যের সাথে যোগ করা
                          হবে।
                        </li>
                      </ol>
                      <p>রকেট মার্চেণ্ট নম্বর : 01721787141</p>
                    </div>
                    <form>

                      <div class="form-check">
                        <input id="rocket" name="payment" placeholder="রকেট নাম্বার" class="form-control" type="number"
                          required="">
                        <br>
                        <input id="rocket" name="payment" placeholder="১১ ডিজিটের Trans ID লিখুন" class="form-control"
                          type="number" required="">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <span class="or d-block mt-5 mb-4">.........অথবা.........</span>
              <div class="form-check ">
                <input type="radio" name="payment" id="cash">
                <label class="form-check-label" for="cash">ক্যাশ</label>
              </div>
            </div>

          </fieldset>

          <button type="submit" class="btn btn-success download">ডাউনলোড
            করুন</button>
        </form>
      </div>
    </div>
  </section>

  <script>



<script src="{{asset('asset/assets/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('asset/assets/js/modernizr-3.11.2.min.js')}}">
<script src="{{asset('asset/assets/js/popper.min.js')}}"></script>
<script src="{{asset('asset/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/assets/js/ma5-menu.min.js')}}"></script>
<script src="{{asset('asset/assets/js/chart.js')}}"></script>
<script src="{{asset('asset/assets/js/jquery.countTo.js')}}"></script>
<script src="{{asset('asset/assets/js/plugins.js')}}"></script>
<script src="{{asset('asset/assets/js/jquery.countTo.js')}}"></script>
<script src="{{asset('asset/assets/js/main.js')}}"></script>
<script src="{{asset('asset/assets/js/rationMy.js')}}"></script>
<script src="{{asset('asset/assets/js/ration.js')}}"></script>

  </script>



</body>

</html>
