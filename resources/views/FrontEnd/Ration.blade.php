@extends('FrontEnd.Layouts.main')
@section('main.container')







  <div class="row content_area">

    <div class="col-12 mb-4 content_right">
      <div class="content_area_right">

        <div class="row mt-4">
          <div class="col-12 ration_content">
            <div class="nav nav-tabs justify-content-center" id="nav-tab2" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-cow"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">গরু </button>

              <button class=" nav-link " id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-chicken"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">মুরগী
              </button>
            </div>

            <div class="tab-content" id="nav-tab-Content">
              <div class="tab-pane fade show active" id="nav-cow" role="tabpanel" aria-labelledby="nav-home-tab">


                <div class="nav nav-tabs mt-4 cowType" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#dairy"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">দুগ্ধজাত গাভী</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#fat"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                    মোটাতাজাকরন</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#fat"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">বাছুর
                   </button>

                </div>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="dairy" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="dairy_details">
                        <div class="dairy_input">
                          <div>
                            <label for="weight">ওজন (কেজি):</label>
                            <input type="number" id="weight"><br><br>

                            <label for="milk">দুধের উৎপাদন (লিটার):</label>
                            <input type="number" id="milk"><br><br>

                            <label for="danap">দানাদার প্রাপ্যতা (কেজি):</label>
                            <input type="number" id="danap"><br><br>

                            <label for="grassp">ঘাসের প্রাপ্যতা (কেজি):</label>
                            <input type="number" id="grassp"><br><br>

                            <div class="weight_btn">
                              <button onclick="calculate()">পরিমান নির্ণয় করুন
                              </button>
                              <button id="clearGraph1Button" onclick="clearFields() ">মুছে ফেলুন</button>
                            </div>

                          </div>
                          <div class="another_calculator mt-4">
                            <!-- Input field -->
                            <label for="userInput">প্রয়োজনীয় পরিমাণ (কেজি):</label>
                            <input type="number" id="userInput">
                            <div class="mt-4 border p-3">
                              <p>প্রাপ্ত শুস্ক পদার্থ (কেজি): <span id="output1"></span></p>
                              <p>প্রাপ্ত শক্তি (এমজে): <span id="output2"></span></p>
                              <p>প্রাপ্ত ক্রুড প্রোটিন (কেজি): <span id="output3"></span></p>
                            </div>
                          </div>
                        </div>

                        <div class="ration_info_inner">
                          <h6>ফলাফল:</h6>
                          <div id="results"></div>

                        </div>
                      </div>



                      <div>
                        <div class="graph-container">
                          <div class="graph" id="graph1">
                              <h2>Graph 1</h2>
                              <canvas id="chart1"></canvas>
                          </div>
                          <div class="graph" id="graph2">
                              <h2>Graph 2</h2>
                              <canvas id="chart2"></canvas>
                          </div>
                           <!-- Hidden elements to store results after converting in grams -->
                           <div id="result-grasspp-grams"></div>
                           <div id="result-danapp-grams"></div>
                        </div>
                      </div>
                      <h6 class="mt-5 text-success mb-2">গড়ে তুলুন ডেইরি ফার্ম</h6>

                      <p>বাংলাদেশে এখন সফল ডেইরি ফার্মের সংখ্যা অনেক। দিন দিন এর চাহিদা ও বাজার বাড়ছে। একদিকে যেমন এ
                        থেকে আদর্শ খাবার হিসেবে
                        দুধ, আমিষের চাহিদা মেটাতে মাংস এবং জ্বালানি হিসেবে গোবর ও জৈব সার পাওয়া যাবে, তেমনি অন্যদিকে
                        এ
                        খাত থেকে বেশ ভালো আয়
                        করাও সম্ভব। তবে এক্ষেত্রে অবশ্যই আপনাকে অল্পবিস্তর জ্ঞান থাকতে হবে। সবচেয়ে ভালো হয় কোনো
                        প্রতিষ্ঠান থেকে স্বল্প বা
                        দীর্ঘমেয়াদি প্রশিক্ষণ নিলে।</p>

                      <ul class="mt-4" style="list-style-type: circle; margin-left: 40px;">
                        <li><b>প্রাথমিক প্রয়োজন :</b>যেকোনো কিছু গড়তে সবার আগে প্রয়োজন প্রাথমিক প্রস্তুতি। এ
                          প্রস্তুতির উপর
                          নির্ভর করে যে কোনো কাজের
                          সফলতার ও ব্যর্থতা। ডেইরি ফার্ম গড়ে তুলতে প্রয়োজন আর্থিক সঙ্গতি, অভিজ্ঞতা ও গরুর নিরাপদ
                          আশ্রয়।
                          প্রথমেই বিশাল ফার্ম
                          তৈরিতে হাত না দিয়ে ছোট পরিসরে কাজে হাত দেওয়া ভালো। ৫ থেকে ৬টি গরু নিয়ে যাত্রা করে আস্তে
                          আস্তে
                          ফার্মকে সম্প্রসারণ করাই
                          উত্তম। ২টি গরুর জন্য একজন দক্ষ লোক নিয়োগ করা গেলে ভালো। তবে খেয়াল রাখতে হবে লোকটির গরুর
                          যত্ন
                          নেয়ার পূর্বঅভিজ্ঞতা আছে
                          কিনা।</li>

                        <li><b>বাছাই প্রক্রিয়া :</b>নিজ এলাকায় বিশেষ করে মফস্বলে গরুর ফার্ম গড়ে তোলাই শ্রেয়। এ
                          ক্ষেত্রে
                          প্রয়োজন গরুর উন্নত জাত বাছাই।
                          উন্নত জাতের গরু বাছাই না করলে সারা বছর ফার্মে রোগবালাই লেগে থাকবে । ভালো জাতের গরুর পাশাপাশি
                          ফার্মে পর্যাপ্ত ঘাস, খৈল
                          বিচালির ব্যবস্থা রাখতে হবে। ফার্ম গড়ে তোলার পরপরই দুধ বিক্রির জন্য প্রচারণা চালাতে হবে।
                        </li>
                        <li><b>স্থান নির্বাচন :</b>যেখানে যাতায়াত ব্যবস্থা ভালো এবং দুধ বিক্রির যথেষ্ট সুযোগ রয়েছে
                          এসব এলাকার
                          আশপাশেই ডেইরি ফার্ম গড়ে
                          তোলা প্রয়োজন। চারপাশে উঁচু দেওয়াল, পরিবেশসম্মত আবাসন, পর্যাপ্ত আলো-বাতাস এবং গরুর বিশ্রাম
                          ও
                          হাঁটাচলার জন্য জায়গা
                          থাকতে হবে। গরুর ওষুধের দোকান, কাঁচা ঘাসের খামার আশপাশে থাকলে ভালো।</li>
                        <li><b>খাবার সরবরাহ :</b>ডেইরি ফার্মের জন্য সর্বাগ্রে গুরুত্ব দিতে হবে গরুর খাবারের প্রতি।
                          পর্যাপ্ত ও
                          মানসম্পন্ন খাবার না পেলে
                          সঠিক পরিমাণ দুধ পাওয়া যায় না। ধানের কুঁড়া, গমের ভুসি, ছোলা, খেসারির খোসা, লবণ, খৈল,
                          নারিকেলের
                          ছোবড়া, ঘাস-বিচালির
                          পর্যাপ্ত সংগ্রহ রাখতে হবে। অনেক সময় বাসি ও পচা খাবার গরুকে সরবরাহ করা হয়। যা কখনোই ঠিক
                          নয়।
                          এতে করে গরুর বিভিন্ন রোগে
                          আক্রান্ত হতে পারে। সবসময়ই খেয়াল রাখতে হবে গরুর খাদ্য যেন পরিষ্কার পরিচ্ছন্ন ও পুষ্টিমান
                          সম্পন্ন হয়। এ জন্য পচা বা
                          দীর্ঘদিন রাখা এসব পণ্য গরুকে খাওয়ানো উচিত নয়। গাভীর গর্ভধারণ ও গর্ভকালীন আলাদাভাবে
                          পরিচর্যা
                          করতে হবে। এ সময় স্থানীয়
                          পশু চিকিৎসকের সঙ্গে সার্বক্ষণিক যোগাযোগ রক্ষা করতে হবে।</li>
                        <li><b>আয়-ব্যয় :</b>ডেইরি ফার্ম একটি দীর্ঘমেয়াদি কার্যক্রম। সঙ্গে সঙ্গেই লাভের আশা করা ভুল।
                          বরং ধীরে
                          সুস্থে এগুলেই ভালো ফল
                          পাওয়া যাবে। গড়ে এক একটি গরু কিনতে ৩০-৫০ হাজার টাকা খরচ হবে। এছাড়া যত বেশি গরুর সংখ্যা
                          বাড়বে
                          খরচের খাতও তত কমবে।
                          বর্তমানে শহরের বিভিন্ন মিষ্টির দোকান ও কনফেকশনারীর লোকজন সরাসরি ফার্মে এসে দুধ সংগ্রহ করে
                          নিয়ে
                          যায়। গড়ে এক একটি গরু
                          থেকে মাসে ৪-৫ হাজার টাকার দুধ বিক্রি করা সম্ভব। খরচ বাদে এই লাভ একটি পরিবারের জন্য কম নয়।
                        </li>
                        <li><b>পরিচর্যা :</b>উন্নত জাতের গাভী ডেইরি ফার্মের জন্য সহায়ক। এ ক্ষেত্রে নিউজিল্যান্ড বা
                          অস্ট্রেলিয়ান
                          গাভীর জাত বেছে নেওয়া
                          যেতে পারে। এজন্য পশু খামারি এবং পশু কর্মকর্তার সঙ্গে পরামর্শ করে নিলে ভালো হয়। প্রতিটি গরুর
                          জন্য আলাদা মশারি, ফ্যান,
                          ময়লা পরিষ্কারের ব্যবস্থা রাখতে হবে। আলোর জন্য লাইটিং এবং পরিচ্ছন্নতার ব্যাপারেও নজর দেওয়া
                          জরুরি।</li>
                      </ul>


                      <h6 class="mt-5 mb-2 text-danger">গাভীর দুধের উত্পাদন যেভাবে বাড়াবেন</h6>
                      <p>গাভীর দুধ উত্পাদনের পরিমাণ ও গুণগতমান জাতের ওপর নির্ভর করে। গাভীর দুধ উত্পাদনের পরিমাণ দুধের
                        উপাদান যেমন-মাখন, আমিষ,
                        খনিজ পদার্থ সবই বিভিন্ন জাতের গাভীতে কম-বেশি হতে পারে। বংশগত ক্ষমতার কারণ দেশীয় জাতের গাভীতে
                        দুধের মাখনের পরিমাণ বেশি
                        থাকে কিন্তু এরা দুধ উত্পাদন করে কম। সিন্ধি, শাহিওয়াল, হরিয়ানা জাতের গাভীর দুধে মাখন বা ননীর
                        পরিমাণ অন্য বিদেশীয় জাতের
                        গাভী যেমন হলস্টেন, ফ্রিজিয়ান, জার্সি ইত্যাদি জাতের গাভী সিন্ধি, শাহিওয়াল, হরিয়ানা প্রভৃতি
                        গাভী থেকে বেশি দুধ দেয়।</p>

                      <p>খাদ্য গাভীর দুধ উত্পাদন ও দুধের গুণগতমানের ওপর গুরুত্বপূর্ণ প্রভাব বিস্তার করে। অধিক পরিমাণ
                        খাদ্য খাওয়ালে বেশি দুধ
                        পাওয়া যায়। তবে খাদ্য অবশ্যই সুষম হতে হবে। গাভীকে সুষম খাদ্য না খাওয়ালে দুধ উত্পাদনের পরিমাণ
                        আশঙ্কাজনকভাবে কমে যায়
                        এবং দধের গুণগতমানও কমতে বাধ্য। কারণ খাদ্যে বিদ্যমান উপাদানগুলো ভিন্ন অবস্থায় দুধের মাধ্যমে
                        নিঃসৃত হয়। খাদ্যে দুধের
                        মাখনের উপস্থিতির পরিমাণ কম-বেশি করতে পারে। নিম্নোক্ত ধরনের খাদ্যের জন্য গাভীর দুধের মাখনের হার
                        কম হতে পারে।</p>

                      <ul class="mt-4" style="list-style-type:disc; margin-left: 40px;">
                        <li>মাত্রাতিরিক্ত দানাদার খাদ্য খাওয়ালে।</li>
                        <li>পিলেট জাতীয় খাদ্য খাওয়ালে।</li>
                        <li>অতিরিক্ত রসালো খাদ্য খাওয়ালে এবং</li>
                        <li>মিহিভাবে গুঁড়ো করা খড় খাওয়ালে।</li>
                      </ul>


                      <p class="mt-3">গাভীর দুধে মাখনের পরিমাণ কমে গেলে খাদ্য পরিবর্তন করে প্রয়োজনীয় সুষম খাদ্য
                        খাওয়াতে হবে।
                        দুধে
                        খনিজ পদার্থ ও
                        খাদ্যপ্রাণের পরিমাণ গাভীর খাদ্যের মাধ্যমে বাড়ানো যায়। গাভীকে সুষম খাদ্য না দিলে দুধে সামান্য
                        মাত্রায় আমিষ ও শর্করা
                        জাতীয় উপাদান পাওয়া যায় এবং দুধ উত্পাদনের পরিমাণ কমে যায়। দুধ দোহন বিশেষ করে দোহন কাল,
                        দোহনের
                        সময়, দুধ দোহন
                        প্রক্রিয়া, বিভিন্ন বাঁটের প্রভাব ইত্যাদি গাভীর দুধের পরিমাণ ও মানকে প্রভাবিত করে। গাভীর দুধ
                        দেয়ার পরিমাণ আস্তে আস্তে
                        ৫০ দিনে বেড়ে সর্বোচ্চ হয়। ওলানে দুধের চাপের ওপর দুধের পরিমাণ ও উপাদান নির্ভর করে। দুগ্ধদান
                        কালের ৯০ দিন পর থেকে দুধে
                        মাখন ও আমিষের হার আংশিক বাড়ে। একই গাভীকে স্বল্প সময়ের ব্যবধানে দোহন করলে দুধে মাখনের পরিমাণ
                        বেশি পাওয়া যায়। তাই
                        সকালের দুধের চেয়ে বিকালের দুধে মাখনের পরিমাণ বেশি থাকে। তাই গাভীকে ২৪ ঘণ্টার মধ্যে ২-৩ বার
                        দোহন
                        করা উচিত। এতে দুধ
                        উত্পাদনের পরিমাণ বাড়তে পারে।</p>

                      <p class="mt-3">প্রসবকালে গাভীর সুস্বাস্থ্য আশানুরূপ দুধ উত্পাদনের জন্য অত্যন্ত গুরুত্বপূর্ণ।
                        গাভী থেকে বেশি
                        দুধ
                        পেতে হলে গর্ভকালে
                        সুষ্ঠু পরিচর্যা ও সুষম খাদ্য দেয়া প্রয়োজন। প্রসবের দুই মাস আগে গাভীর দুধ দোহন অবশ্যই বন্ধ
                        করে
                        দিতে হবে। মোট দুধ
                        উত্পাদনের ৪০% ওলানের সামনের অংশের বাঁট এবং ৩০% পেছনের অংশের বাঁট থেকে পাওয়া যায়। গাভীর
                        ওলানের
                        বাঁট অবশ্যই সুস্থ থাকতে
                        হবে।
                      </p>

                      <p class="mt-3">রক্ষণাবেক্ষণ, বাসস্থান, গাভীর দুধ উত্পাদনের পরিমাণ ও গুণগতমানের হ্রাস-বৃদ্ধির
                        জন্য অনেকাংশে
                        দায়ী। পারিপার্শ্বিক অবস্থা
                        গাভীর জন্য আরামদায়ক হওয়া উচিত। দোহনের সময় বিশেষ সতর্কতা অবলম্বন না করলে অর্থাত্ দুধ দোহন
                        ত্রুটিপূর্ণ হলে দুধ
                        উত্পাদনের পরিমাণ ও গুণগতমান কমতে পারে।</p>

                      <p class="mt-3">প্রতিকূল আবহাওয়া দুধ উত্পাদনের জন্য ক্ষতিকর। শীত মৌসুম দুধাল গাভীর জন্য
                        আরামদায়ক। এ মৌসুমে
                        দুধ
                        উত্পাদনের এবং দুধে
                        মাখনের পরিমাণ বৃদ্ধি পায়, গরমকাল, বর্ষাকাল, আর্দ্র আবহাওয়ায় গাভীর দুধের উত্পাদন ও গুণগতমান
                        হ্রাস পায়। গরমের দিকে
                        গাভীকে ঠাণ্ডা অবস্থায় রাখলে উত্পাদনের কোনো ক্ষতি হয় না। গাভীর প্রজননের সময় দুধ উত্পাদন কমে
                        যায়।</p>

                      <p class="mt-3">দীর্ঘ বিরতিতে বাচ্চা প্রসব করলে গাভীর দুধ উত্পাদনের পরিমাণ বৃদ্ধি পায়। স্বল্প
                        বিরতিতে বাচ্চা
                        প্রসবের কারণে দুধ উত্পাদন
                        কিছুটা হ্রাস পেতে পারে। তাই গাভীকে বাচ্চা প্রসবের ৬০-৯০ দিনের মধ্যে পাল দিতে হবে। কোনোক্রমেই
                        ৬০
                        দিনের আগে প্রজনন করানো
                        উচিত নয়। গাভীর শরীরে ৫০% এবং দুধে প্রায় ৮৭% পানি থাকে। তাই গাভীকে ইচ্ছামত পানি পান করার
                        ব্যবস্থা করলে দুধ উত্পাদন বেশি
                        হয় এবং দুধে মাখনের পরিমাণ বেশি থাকে।</p>

                    </div>

                    <div class="tab-pane fade" id="fat" role="tabpanel" aria-labelledby="nav-profile-tab">cockok
                      details
                    </div>
                  </div>

              </div>

              <div class="tab-pane fade" id="nav-chicken" role="tabpanel" aria-labelledby="nav-profile-tab2">

              </div>
            </div>


          </div>
        </div>

      </div>
    </div>
  </div>
  @endsection



