REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (3775,150,'P','B');
REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (3776,244,'P','B');
REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (3777,245,'P','B');
REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (265,148,'P','B');
REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (558,149,'P','B');
REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (1766,246,'P','B');
REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (3466,5,'P','B');
REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (978,1,'P','B');
REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (3469,247,'P','B');
REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (2508,248,'P','B');
REPLACE INTO ?:discussion (`thread_id`, `object_id`, `object_type`, `type`) VALUES (2472,241,'P','B');

UPDATE ?:discussion SET company_id = 1 where thread_id NOT IN('26', '7', '8', '9', '11');

REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('This thing is a bang for the buck. Bought it a while back, there was some minor problem, but the store agreed to fix the problem and offered compensation. Then I bought a more powerful CPU and more RAM for this thing.After the upgrade, it’s an iMac killer. For less than half the price.',113,3776);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I was looking for an all-in-one PC for my kid (he’s 9) and of course, my first choice was an iMac. But after consulting with the manager I realized that after a few years iMac will become obsolete and I’ll have to buy a new one. I’m not used to wasting money, so I asked for alternatives. And the manager showed me this thing. He said that for now, it will cover all needs of my son both in games and education. I got extended support so after 2 years I’ll be able to upgrade it to better specs.\r\n\r\nBTW, my son loves it. A big touch screen makes him really happy!',111,3776);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Got a bunch of these for a private school classroom, they look easy enough both for users and engineers that will tinker with them.',112,3776);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('My first phone ever! My dad bought it for me for my tenth birthday, I love it!',114,3777);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Bought it for my mother, she’s not used to phones with a touch screen so that’s her first experience. She’s very happy that we can make video calls through facetime and be in touch with each other every day. She listens to her fav music every day while reading books, she also has a small flower garden and likes to send everyone photos of her flowers, good that photos she takes are crisp, sharp, and vibrant.\r\nI think I wrote too many words already so let me cut it short: it’s a great starter phone for children or elders.',115,3777);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Got it as a second phone, thank heavens that it has the same specs as iPhone 5 but in a cheaper plastic case. It also has all functions of the latter, no cut corners or anything. Good thing that Apple knows its job.',116,3777);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Got this bike with a discount, a really affordable option for most people out there. I got almost 100 miles on it, no problems so far. Don’t forget to clean it after every ride.',117,3775);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I know it’s not an MTB, but I used it for some hardcore cross-country riding! Had to replace almost half of the parts after the first two rides, they just won’t do at all.',118,3775);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I wish it had a softer seat… Besides that, I use it for short park riding, and it provides a very smooth riding experience.',119,3775);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('This thing is the stuff of legends. If you are an audiophile like me, take it without question. You can listen to lossless music AND browse the web at the same time on the same device, fantastic!',61,265);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I don’t really need an overly functional super-duper music player that can brew me a coffee, I needed a replacement for my broken iPod. And this player handled that job really well. One extra pro is the fact that you don’t have to use pesky iTunes every time you connect the player.',62,265);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('A big screen is good and all, and I love to watch movies on it, but where are the buttons?',63,265);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('An undying classic with new features. iPod killer. One word: superb!',68,558);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Nice little player, my first player ever. Headphones that were in the box are nothing special though, bring some good ones. Built-in EQ is doing miracles to sound!',69,558);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Oh, buttons! Here I go, instant buy!',70,558);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I received it as a present from my friends. I’m a lover of extreme activities and I also love to record my activities and share it with friends, family, and other people interested in all things extreme. My previous camera, the original Hero, was good enough, but my friends just thought that I may want to try this new Hero3+. It comes with a waterproof case so splashes and waves are not a problem. It also records video in 1080p with 50 frames per second which is a major improvement for me.',77,1766);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('We (me and my hubby) bought this camera for our trip to Italy. The videos we took on that trip were as sharp as photos! We tried to visit all the popular places in Italy and thanks to the quality of videos we can refresh our good memories as much as we want to!',78,1766);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('It was a good camera… Unfortunately, now it’s lying at the bottom of the Adriatic. I’ll buy a new one soon and will be more careful next time.',79,1766);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Picture quality is a bit meh but overall nice TV, good for small living rooms',80,3466);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I really like that TV! Much better than the bulky old one we had for almost 15 years! The image is so sharp and crisp! And the sound quality is really good too!',81,3466);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I got headaches from this thing, had to return it to the store. Pity, it looks nice.',82,3466);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Absolutely enjoy this TV. The colors are amazing: the depth, the balance and everything else is just top notch! I can plug in my hard drive and watch videos instantly! I am still amazed at the clarity from all the angles. Just getting into Blue-ray capabilities now. Although the price is relatively high, I can truly say that it''s a stunning piece of technological craftsmanship.',89,978);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Broke the next day. It probably got damaged during shipping. I had to ask for a replacement, and it has just arrived today. So far so good.',90,978);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Very good quality.',91,978);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I would never anticipate that Nokia will make an android tablet one day. But they did.\r\nI bought it, tried it, it’s a typical 8-inch android tablet with a square-ish aspect ratio. Don’t expect miracles from it, it will deliver none. Specs are OK, the software is a bit of a different story though. After a month of use, it became a bit sluggish, and I had to install a cleaner app. I think Nokia can do better than that.',92,3469);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I left it on the driver seat of my car and accidentally sat on it. It broke in half and the service center refused to exchange it for a new one, telling me something about a “non-warranty case.” I’ll stick to a notebook and pen until they begin to manufacture something sturdier.',93,3469);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I already had an old iPad when I decided to get this. Interesting at first, it became clear that this tablet is in some areas not as good as an iPad. I’m talking about battery life, the responsiveness of user interface, and performance in the apps and games. One thing it excels over the iPad is the camera, it’s much better than on iPad. My personal score for this tablet is 6/10. Good for those who never had a tablet or iPad before, not so much for everyone else.',94,3469);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('Never had a game console before (not talking about old handheld ones, another story), this is a totally new experience for me. I was mesmerized by the abundance of various games of all types of genres, some of them look more like interactive movies than something made from polygons and textures. Some games require you to stand up and move your body, something I was not expecting and was very excited about. The Xbox controller is very nice, grippy, with adjustable rumbling levels. Controls are something to get used to though.\r\nOverall, I think I will recommend this console to my friends who still don’t have one or who have another one from Sony. Very joyful pastime.',98,2508);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I got this for my twin sons so they could stop fighting each other and learn how to compete in peaceful, positive ways. The problem of violence has gone away, but now there’s another one. They spend all day long playing games. I can only hope they’ll get tired of it someday.',99,2508);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I have a PC already, got this to play some Xbox exclusives that didn’t come out yet on PC. I’m very satisfied with the optimization and graphics, less so with controls. Seriously, after a keyboard and mouse, how can a controller compare to them? Despite that, I really like to play low to mid active games, it’s very relaxing. But for real action gaming, you definitely need a PC.',100,2508);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('I have an iPad Air 2 for work, and now I bought this one for personal use. I’m amazed by the battery life compared to all the other iPads in the past. I can play an online game on it for 7-8 hours and still have 15-20% battery life whereas Air 2 would be dead in under 2 hours. The ability to use a PS4 or Xbox1 controller with it is a plus also. The graphics are truly amazing, and the sound is great just like previous versions of the iPad. I got the 32 GB model, and I am very happy with the price for what I have. I highly recommend this product.',101,2472);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('This is a perfect media consumption device. It has a great screen, speakers and excellent battery life. I think for the price this is hands down the tablet to beat. Even if you are not an Apple or iOS fan there is not much in the market that can compete with this for the price.',102,2472);
REPLACE INTO ?:discussion_messages (`message`, `post_id`, `thread_id`) VALUES ('This was the first iPad I have ever purchased so I have to admit, I was scared when I bought it. I purchased this during Black Friday as a way for me to take notes in my college classes. I had been looking at reviews and watching videos for a while before I decided to go with this 7th generation iPad.\r\nI have been using it for a few weeks now and truthfully, this was definitely a great purchase! I enjoy taking notes on this, watching videos, and etc. The camera, sound, battery life, and compatibility with the pen is beyond amazing. And everything from the description, such as the lightning to USB cable and the USB power adapter came with it inside the box.\r\nDefinitely worth the price!',103,2472);

REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (111,3776,'Jack',1484899800,0,'80451060','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (112,3776,'Tarina',1484899920,0,'80451060','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (113,3776,'Frank',1484899980,0,'80451060','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (114,3777,'Mary',1484900640,0,'80451060','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (115,3777,'Doug',1484900700,0,'80451060','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (116,3777,'Flynn',1484900700,0,'80451060','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (117,3775,'Julia',1484901840,0,'80451060','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (118,3775,'Steve',1484901900,0,'80451060','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (119,3775,'Rosa',1484901900,0,'80451060','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (61,265,'Sam',1484306940,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (62,265,'Joe',1484307000,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (63,265,'Nancy',1484307000,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (68,558,'Catherine',1484307300,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (69,558,'Phillip',1484307300,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (70,558,'Nancy',1484307360,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (77,1766,'Mark',1484307720,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (78,1766,'Jessica',1484307720,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (79,1766,'Robert',1484307780,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (80,3466,'John',1484307840,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (81,3466,'Stacy',1484307840,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (82,3466,'Peter',1484307900,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (89,978,'Brian',1484308560,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (90,978,'J. Bond',1484308560,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (91,978,'Major Tom',1484308740,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (92,3469,'James',1484308980,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (93,3469,'Jeremy',1484308980,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (94,3469,'Richard',1484309040,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (98,2508,'Hugh',1484309340,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (99,2508,'Lisbeth',1484309400,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (100,2508,'Bill',1484309400,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (101,2472,'Jeremy',1484309460,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (102,2472,'Tom',1484309520,0,'5f68c2c5','A');
REPLACE INTO ?:discussion_posts (`post_id`, `thread_id`, `name`, `timestamp`, `user_id`, `ip_address`, `status`) VALUES (103,2472,'Sarah',1484309520,0,'5f68c2c5','A');

REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (3,111,3776);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,112,3776);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,113,3776);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,114,3777);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (4,115,3777);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,116,3777);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,117,3775);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (4,118,3775);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (3,119,3775);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,61,265);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,62,265);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (3,63,265);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,68,558);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (4,69,558);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,70,558);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,77,1766);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,78,1766);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,79,1766);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (4,80,3466);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,81,3466);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (2,82,3466);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (4,89,978);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (3,90,978);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,91,978);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (3,92,3469);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (2,93,3469);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (3,94,3469);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,98,2508);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (4,99,2508);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (4,100,2508);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,101,2472);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,102,2472);
REPLACE INTO ?:discussion_rating (`rating_value`, `post_id`, `thread_id`) VALUES (5,103,2472);
