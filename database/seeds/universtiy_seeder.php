<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class universtiy_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('universities')->insert([
            'name' => 'Massachusetts Institute of Technology (MIT)',
            'description'=>'“Mind and Hand” is the thought-provoking motto of the Massachusetts Institute of Technology, known also as MIT. This motto enigmatically encapsulates this famous institution’s mission to advance knowledge in science, technology and areas of scholarship that can help to make the world a better place. 

            At its founding in 1861, MIT was initially a small community of problem-solvers and science lovers eager to bring their knowledge to bear on the world. Today, MIT has evolved into an educational behemoth, with some 1,000 faculty members and more than 11,000 undergraduate and graduate students. 
            
            MIT is now an independent, coeducational, privately endowed university organized into five schools (architecture and planning; engineering; humanities, arts, and social sciences; management; science). Yet the principle of educational innovation remains at the core of MIT’s educational philosophy.',
            'url'=>'http://www.mit.edu/',
            'grade_id'=>7,
            'tofel_from'=>80,
            'tofel_to'=>120,
            'image'=>'mit.jpg',
             
        ]);
        DB::table('universities')->insert([
            'name' => 'Stanford University',
            'description'=>'Located 35 miles south of San Francisco and 20 miles north of San Jose, Stanford University is in the heart of Northern California’s dynamic Silicon Valley, home to Yahoo, Google, Hewlett-Packard, and many other cutting-edge tech companies that were founded by and continue to be led by Stanford alumni and faculty. Nicknamed the “billionaire factory”, it is said that if Stanford graduates formed their own country it would boast one of the world’s largest ten economies. 

            Covering 8,180 acres, Stanford has one of the largest university campuses in the US, with 18 interdisciplinary research institutes and seven schools: the Graduate School of Business; School of Earth, Energy & Environmental Sciences; Graduate School of Education; School of Engineering; School of Humanities and Sciences; Law School; and School of Medicine. 
            
            Stanford University was founded in 1885 by California senator Leland Stanford and his wife, Jane, to “promote the public welfare by exercising an',
            'url'=>'https://www.stanford.edu/',
            'grade_id'=>6,
            'tofel_from'=>70,
            'tofel_to'=>120,
            'image'=>'stanford.jpg',
             
        ]);
        DB::table('universities')->insert([
            'name' => 'Harvard University',
            'description'=>'Established in 1636, Harvard is the oldest higher education institution in the United States, and is widely regarded in terms of its influence, reputation, and academic pedigree as a leading university in not just the US but also the world. 

            Located in Cambridge, Massachusetts, three miles north-west of Boston, Harvard’s 209-acre campus houses 10 degree-granting schools in addition to the Radcliffe Institute for Advanced Study, two theaters, and five museums. It is also home to the largest academic library system in the world, with 18 million volumes, 180,000 serial titles, an estimated 400 million manuscript items and 10 million photographs. 
            
            Like most of the United States’ pre-Civil War colleges, Harvard was founded to train clergy, but Harvard’s curriculum and student body quickly secularized, and in the 20th century admissions policy was opened up to bring in a more diverse pool of applicants.',
            'url'=>'https://www.harvard.edu/',
            'grade_id'=>4,
            'tofel_from'=>80,
            'tofel_to'=>120,
            'image'=>'harvard.png',
            
             
        ]);
        DB::table('universities')->insert([
            'name' => 'Harvard University',
            'description'=>'Established in 1636, Harvard is the oldest higher education institution in the United States, and is widely regarded in terms of its influence, reputation, and academic pedigree as a leading university in not just the US but also the world. 

            Located in Cambridge, Massachusetts, three miles north-west of Boston, Harvard’s 209-acre campus houses 10 degree-granting schools in addition to the Radcliffe Institute for Advanced Study, two theaters, and five museums. It is also home to the largest academic library system in the world, with 18 million volumes, 180,000 serial titles, an estimated 400 million manuscript items and 10 million photographs. 
            
            Like most of the United States’ pre-Civil War colleges, Harvard was founded to train clergy, but Harvard’s curriculum and student body quickly secularized, and in the 20th century admissions policy was opened up to bring in a more diverse pool of applicants.',
            'url'=>'https://www.harvard.edu/',
            'grade_id'=>5,
            'tofel_from'=>80,
            'tofel_to'=>120,
            'image'=>'harvard.png',
            
             
        ]);
        DB::table('universities')->insert([
            'name' => ' university of Cambridge',
            'description'=>'Located in the center of the ancient city of Cambridge, 50 miles north of London, the University of Cambridge is a collegiate public research institution that serves more than 18,000 students from all corners of the globe. 

            The university consists of numerous listed buildings and is divided into 31 autonomous colleges, with many of the older ones situated on the famous river Cam. Applications are made directly to the individual colleges, rather than to the university overall. You can live and are often taught within your college, receiving small group teaching sessions known as college supervisions. 
            
            Six academic schools – Arts and Humanities, Biological Sciences, Clinical Medicine, Humanities and Social Sciences, Physical Sciences, and Technology – are spread across the university’s colleges, housing roughly 150 faculties and other institutions. 
            
            Founded in 1209, the University of Cambridge’s 800-year history makes it the fourth-oldest university in the world and the',
            'url'=>'https://www.cam.ac.uk/',
            'grade_id'=>7,
            'tofel_from'=>70,
            'tofel_to'=>120,
            'image'=>'cambridge.jpg',
            
             
        ]);
        DB::table('universities')->insert([
            'name' => ' University of Oxford',
            'description'=>'The University of Oxford is the oldest university in the English-speaking world, and is actually so ancient that its founding date is unknown – though it is thought that teaching took place there as early as the 11th century. 

            It’s located in and around the medieval city center of Oxford, dubbed “the dreaming city of spires” by the 19th century poet Matthew Arnold, and comprises 44 colleges and halls as well as the largest library system in the UK. 
            
            There are 22,000 students at Oxford in total, around half of whom are undergraduates, while 40 per cent are international students. A quarter of the city of Oxford’s residents are students, giving the city the youngest population in the UK. 
            
            The University of Oxford does not have a main campus, its buildings and facilities instead being scattered around the medieval city center. Its colleges each have a distinctive character and traditions often dating back centuries. Colleges are self-governing institutions to which',
            'url'=>'http://www.ox.ac.uk/',
            'grade_id'=>6,
            'tofel_from'=>70,
            'tofel_to'=>120,
            'image'=>'oxford.jpg',
            
             
        ]);
        DB::table('universities')->insert([
            'name' => 'University of St Andrews',
            'description'=>'Founded in 1413, the University of St Andrews is Scotland’s oldest and highest-ranking university. Ranked 92nd in the world, it’s particularly competitive in the following subjects:
            Theology, divinity and religious studies (18th in the QS World University Rankings by Subject) 
            Philosophy (19th) 
            Arts and Humanities (61st) ',
            'url'=>'https://www.st-andrews.ac.uk/',
            'grade_id'=>4,
            'tofel_from'=>60,
            'tofel_to'=>120,
            'image'=>'andrews.png',
            
             
        ]);
        DB::table('universities')->insert([
            'name' => 'University of St Andrews',
            'description'=>'Founded in 1413, the University of St Andrews is Scotland’s oldest and highest-ranking university. Ranked 92nd in the world, it’s particularly competitive in the following subjects:
            Theology, divinity and religious studies (18th in the QS World University Rankings by Subject) 
            Philosophy (19th) 
            Arts and Humanities (61st) ',
            'url'=>'https://www.st-andrews.ac.uk/',
            'grade_id'=>5,
            'tofel_from'=>60,
            'tofel_to'=>120,
            'image'=>'andrews.png',
            
             
        ]);
        DB::table('universities')->insert([
            'name' => 'King Saud University',
            'description'=>'Established in 1957, King Saud University comes third in the 2018 edition of the QS Arab Region University Rankings, and 221st in the latest world rankings. Of a similar level of prestige to King Fahd University, it has more of a focus on the life sciences alongside engineering. In the QS World University Rankings by Subject 2017, King Saud University is ranked among the world’s top 150 for mechanical engineering, agriculture and pharmacy.

            Located in the capital city of Riyadh, King Saud University currently enrolls a total of 51,000 students, of which more than 1,100 are internationals. Female students are admitted. ',
            'url'=>'https://ksu.edu.sa/',
            'grade_id'=>7,
            'tofel_from'=>80,
            'tofel_to'=>120,
            'image'=>'saud.jpg',
            
             
        ]);
        DB::table('universities')->insert([
            'name' => 'King Fahd University of Petroleum & Minerals',
            'description'=>'King Fahd University of Petroleum & Minerals was ranked second in the QS Arab Region University Rankings 2018 and joint 173rd worldwide in the QS World University Rankings 2018, and was established in 1963. It’s located in the city of Dhahran, an important center for the country’s oil industry, and has a current enrollment of more than 7,000 students. Female students are not admitted.

            Despite its name, King Fahd University in fact offers courses in a wide array of subjects, covering traditional disciplines as well as engineering, science and business. It does perform particularly well for those subject areas though, and in the QS World University Rankings by Subject 2017, it’s ranked among the world’s top 50 universities for mineral and mining engineering, as well as the top 150 for chemical, electrical and mechanical engineering ',
            'url'=>'http://www.kfupm.edu.sa/ar/Default.aspx',
            'grade_id'=>6,
            'tofel_from'=>80,
            'tofel_to'=>120,
            'image'=>'fahad.png',
            
             
        ]);
        DB::table('universities')->insert([
            'name' => 'King Abdulaziz University',
            'description'=>'King Abdulaziz University (KAU) is just one place behind King Saud University in the 2018 Arab rankings, coming fourth within the region, and places joint 267th in the world rankings. It was founded in 1967 and has more than 82,000 students, with separate campuses for men and women. These are located in the city of Jeddah, and designed by well-known English architect John Elliott.

            As of 2017, King Abdulaziz University features in the top 150 of the QS World University Rankings by Subject for mechanical engineering, agriculture & forestry and pharmacy. It also offers faculties in a wide range of subject areas, including art and design, humanities, sciences, medicine, pharmacy, business, law and dentistry. As well as offering a range of on-campus undergraduate and graduate programs, King Abdulaziz University also teaches a distance learning program',
            'url'=>'https://www.kau.edu.sa/home_english.aspx',
            'grade_id'=>5,
            'tofel_from'=>80,
            'tofel_to'=>120,
            'image'=>'abdu.jpg',
            
             
        ]);
        DB::table('universities')->insert([
            'name' => 'King Abdulaziz University',
            'description'=>'King Abdulaziz University (KAU) is just one place behind King Saud University in the 2018 Arab rankings, coming fourth within the region, and places joint 267th in the world rankings. It was founded in 1967 and has more than 82,000 students, with separate campuses for men and women. These are located in the city of Jeddah, and designed by well-known English architect John Elliott.

            As of 2017, King Abdulaziz University features in the top 150 of the QS World University Rankings by Subject for mechanical engineering, agriculture & forestry and pharmacy. It also offers faculties in a wide range of subject areas, including art and design, humanities, sciences, medicine, pharmacy, business, law and dentistry. As well as offering a range of on-campus undergraduate and graduate programs, King Abdulaziz University also teaches a distance learning program',
            'url'=>'https://www.kau.edu.sa/home_english.aspx',
            'grade_id'=>4,
            'tofel_from'=>80,
            'tofel_to'=>120,
            'image'=>'abdu.jpg',
            
             
        ]);
    }
}
