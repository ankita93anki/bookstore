<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('genre');
            $table->string('description');
            $table->string('isbn');
            $table->string('image');
            $table->date('published');
            $table->string('publisher');
            $table->timestamps();
        });

        DB::table('books')->insert(
            [
                [
                    "id"=> 1,
                    "title"=> "I have done just.",
                    "author"=> "Napoleon Kautzer",
                    "genre"=> "Ab",
                    "description"=> "IS a long breath, and said to the baby, the shriek of the jury asked. 'That I can't understand it myself to begin again, it was in confusion, getting the Dormouse shook its head impatiently, and.",
                    "isbn"=> "9795816684797",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1981-09-17",
                    "publisher"=> "Omnis Occaecati"
                ],
                [
                    "id"=> 2,
                    "title"=> "The door led right.",
                    "author"=> "Amber Kub",
                    "genre"=> "Quis",
                    "description"=> "And so she went on talking: 'Dear, dear! How queer everything is to-day! And yesterday things went on to her ear, and whispered 'She's under sentence of execution. Then the Queen was to find that.",
                    "isbn"=> "9785056536437",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2010-01-23",
                    "publisher"=> "Quos Provident"
                ],
                [
                    "id"=> 3,
                    "title"=> "White Rabbit.",
                    "author"=> "Carmelo Wolff",
                    "genre"=> "Maxime",
                    "description"=> "RED rose-tree, and we won't talk about her and to stand on your shoes and stockings for you now, dears? I'm sure I have ordered'; and she thought at first was moderate. But the insolence of his.",
                    "isbn"=> "9799274337639",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1972-09-16",
                    "publisher"=> "Et Iste"
                ],
                [
                    "id"=> 4,
                    "title"=> "King had said that.",
                    "author"=> "Uriah Hessel",
                    "genre"=> "Laudantium",
                    "description"=> "Some of the Queen in front of them, and just as well she might, what a Mock Turtle replied in an offended tone. And the moral of that is, but I shall be a book of rules for shutting people up like a.",
                    "isbn"=> "9792018949723",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1995-03-11",
                    "publisher"=> "Cupiditate Et"
                ],
                [
                    "id"=> 5,
                    "title"=> "THAT like?' said.",
                    "author"=> "Tabitha Lynch",
                    "genre"=> "Aut",
                    "description"=> "The Hatter was out of the Mock Turtle said: 'advance twice, set to work shaking him and punching him in the last words out loud, and the shrill voice of thunder, and people began running when they.",
                    "isbn"=> "9798920392244",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1995-08-08",
                    "publisher"=> "Corrupti Fugiat"
                ],
                [
                    "id"=> 6,
                    "title"=> "White Rabbit blew.",
                    "author"=> "Nova Klein",
                    "genre"=> "Consequatur",
                    "description"=> "I'll be jury,\" Said cunning old Fury: \"I'll try the patience of an oyster!' 'I wish I could shut up like a serpent. She had just begun to dream that she had looked under it, and on it (as she had to.",
                    "isbn"=> "9799313794904",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1984-07-25",
                    "publisher"=> "Tempora Facere"
                ],
                [
                    "id"=> 7,
                    "title"=> "I'm angry.",
                    "author"=> "Van Stanton",
                    "genre"=> "Veniam",
                    "description"=> "Caterpillar contemptuously. 'Who are YOU?' said the Queen. 'Can you play croquet?' The soldiers were silent, and looked along the course, here and there was nothing on it were nine o'clock in the.",
                    "isbn"=> "9794127265817",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1971-05-24",
                    "publisher"=> "Culpa Est"
                ],
                [
                    "id"=> 8,
                    "title"=> "Alice: 'I don't.",
                    "author"=> "Napoleon McClure",
                    "genre"=> "Nam",
                    "description"=> "Will you, won't you, will you, won't you join the dance? \"You can really have no sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very.",
                    "isbn"=> "9793745405223",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1995-11-30",
                    "publisher"=> "Quasi Sapiente"
                ],
                [
                    "id"=> 9,
                    "title"=> "His voice has a.",
                    "author"=> "Dylan Schiller",
                    "genre"=> "Quis",
                    "description"=> "What happened to me! When I used to say it out into the wood to listen. The Fish-Footman began by taking the little golden key and hurried upstairs, in great fear lest she should meet the real Mary.",
                    "isbn"=> "9792465666556",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1991-05-22",
                    "publisher"=> "Eos Quia"
                ],
                [
                    "id"=> 10,
                    "title"=> "I got up this.",
                    "author"=> "Reyes Lebsack",
                    "genre"=> "Deserunt",
                    "description"=> "I can't show it you myself,' the Mock Turtle replied; 'and then the Mock Turtle, and to wonder what you're at!\" You know the way down one side and up I goes like a telescope! I think you'd take a.",
                    "isbn"=> "9795583681869",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2009-06-26",
                    "publisher"=> "Assumenda Ratione"
                ],
                [
                    "id"=> 11,
                    "title"=> "When they take us.",
                    "author"=> "Gladyce Wisozk",
                    "genre"=> "Dolore",
                    "description"=> "I THINK,' said Alice. 'Off with his head!' she said, 'for her hair goes in such a long way. So she was getting so thin--and the twinkling of the garden, where Alice could hear the very tones of the.",
                    "isbn"=> "9785198860674",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2009-06-08",
                    "publisher"=> "Eius Maiores"
                ],
                [
                    "id"=> 12,
                    "title"=> "Gryphon, 'she.",
                    "author"=> "Frederic Hartmann",
                    "genre"=> "Iure",
                    "description"=> "Hatter dropped his teacup instead of onions.' Seven flung down his face, as long as I get SOMEWHERE,' Alice added as an explanation. 'Oh, you're sure to kill it in asking riddles that have no sort.",
                    "isbn"=> "9785851548901",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1972-12-14",
                    "publisher"=> "Fugit Libero"
                ],
                [
                    "id"=> 13,
                    "title"=> "I can't quite.",
                    "author"=> "Evert Wolf",
                    "genre"=> "Eum",
                    "description"=> "I find a number of cucumber-frames there must be!' thought Alice. 'I'm glad they don't give birthday presents like that!' 'I couldn't help it,' said the Mock Turtle said: 'no wise fish would go.",
                    "isbn"=> "9791642917962",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2022-06-04",
                    "publisher"=> "Ipsam Aut"
                ],
                [
                    "id"=> 14,
                    "title"=> "Pinch him! Off.",
                    "author"=> "Rafael Ondricka",
                    "genre"=> "Perferendis",
                    "description"=> "Footman continued in the book,' said the Cat. '--so long as you liked.' 'Is that the meeting adjourn, for the moment they saw her, they hurried back to my right size: the next witness would be of.",
                    "isbn"=> "9799348877429",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2013-10-05",
                    "publisher"=> "Alias Sint"
                ],
                [
                    "id"=> 15,
                    "title"=> "No accounting for.",
                    "author"=> "Makayla Pfeffer",
                    "genre"=> "Repudiandae",
                    "description"=> "I think?' 'I had NOT!' cried the Gryphon, 'you first form into a cucumber-frame, or something of the evening, beautiful Soup! 'Beautiful Soup! Who cares for you?' said Alice, who was a.",
                    "isbn"=> "9780365980322",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1970-09-01",
                    "publisher"=> "Vero Aut"
                ],
                [
                    "id"=> 16,
                    "title"=> "SIT down,' the.",
                    "author"=> "Howard Johns",
                    "genre"=> "Nesciunt",
                    "description"=> "For anything tougher than suet; Yet you finished the guinea-pigs!' thought Alice. One of the other arm curled round her once more, while the Mouse was bristling all over, and both footmen, Alice.",
                    "isbn"=> "9788918040769",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1979-12-01",
                    "publisher"=> "Illum Impedit"
                ],
                [
                    "id"=> 17,
                    "title"=> "IS the use of.",
                    "author"=> "Dixie McDermott",
                    "genre"=> "Doloribus",
                    "description"=> "I'm mad?' said Alice. 'Why not?' said the Cat went on, '\"--found it advisable to go from here?' 'That depends a good many little girls eat eggs quite as much use in waiting by the way the people.",
                    "isbn"=> "9797268604408",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1993-01-21",
                    "publisher"=> "Corrupti Fugiat"
                ],
                [
                    "id"=> 18,
                    "title"=> "Alice, timidly.",
                    "author"=> "Nikita O'Keefe",
                    "genre"=> "Illo",
                    "description"=> "I fell off the fire, stirring a large rabbit-hole under the circumstances. There was a different person then.' 'Explain all that,' he said to herself; 'the March Hare interrupted, yawning. 'I'm.",
                    "isbn"=> "9783277489518",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2023-01-14",
                    "publisher"=> "Iste Repudiandae"
                ],
                [
                    "id"=> 19,
                    "title"=> "Duck and a long.",
                    "author"=> "Travon Kreiger",
                    "genre"=> "Et",
                    "description"=> "While the Duchess said after a few yards off. The Cat seemed to be otherwise than what it meant till now.' 'If that's all the unjust things--' when his eye chanced to fall a long time together.'.",
                    "isbn"=> "9789712460524",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2006-03-24",
                    "publisher"=> "Libero Distinctio"
                ],
                [
                    "id"=> 20,
                    "title"=> "ALL RETURNED FROM.",
                    "author"=> "Cornelius Blanda",
                    "genre"=> "Perspiciatis",
                    "description"=> "King said, for about the games now.' CHAPTER X. The Lobster Quadrille is!' 'No, indeed,' said Alice. 'It goes on, you know,' said Alice thoughtfully: 'but then--I shouldn't be hungry for it, while.",
                    "isbn"=> "9784847670893",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1996-12-10",
                    "publisher"=> "Aut Qui"
                ],
                [
                    "id"=> 21,
                    "title"=> "Mock Turtle had.",
                    "author"=> "Mozell Barton",
                    "genre"=> "Accusamus",
                    "description"=> "Alice asked in a pleased tone. 'Pray don't trouble yourself to say to this: so she set to work nibbling at the thought that it led into a line along the sea-shore--' 'Two lines!' cried the Mouse.",
                    "isbn"=> "9795748394108",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2013-07-08",
                    "publisher"=> "Impedit Aut"
                ],
                [
                    "id"=> 22,
                    "title"=> "Now I growl when.",
                    "author"=> "Andrew Osinski",
                    "genre"=> "Iusto",
                    "description"=> "Lizard, who seemed to be two people. 'But it's no use their putting their heads down and looked at it, and burning with curiosity, she ran across the field after it, never once considering how in.",
                    "isbn"=> "9786025303876",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2002-01-10",
                    "publisher"=> "Illum Sit"
                ],
                [
                    "id"=> 23,
                    "title"=> "Queen's ears--'.",
                    "author"=> "Jensen Osinski",
                    "genre"=> "Nobis",
                    "description"=> "However, I've got to?' (Alice had been running half an hour or so there were three little sisters--they were learning to draw, you know--' She had just succeeded in curving it down into its face in.",
                    "isbn"=> "9789556886252",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2016-08-15",
                    "publisher"=> "Dolore Eum"
                ],
                [
                    "id"=> 24,
                    "title"=> "White Rabbit. She.",
                    "author"=> "Lonnie Wunsch",
                    "genre"=> "Tenetur",
                    "description"=> "I know is, it would be very likely true.) Down, down, down. Would the fall NEVER come to the Mock Turtle said with some severity; 'it's very rude.' The Hatter opened his eyes were getting extremely.",
                    "isbn"=> "9798219561320",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1994-05-30",
                    "publisher"=> "Odio Similique"
                ],
                [
                    "id"=> 25,
                    "title"=> "Hatter, 'when the.",
                    "author"=> "Anjali Koch",
                    "genre"=> "Similique",
                    "description"=> "The Dormouse shook itself, and was just going to shrink any further: she felt a very humble tone, going down on the top of her age knew the right house, because the chimneys were shaped like ears.",
                    "isbn"=> "9797444676519",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2021-01-27",
                    "publisher"=> "Et Quo"
                ],
                [
                    "id"=> 26,
                    "title"=> "While the Panther.",
                    "author"=> "Coty Lubowitz",
                    "genre"=> "Iste",
                    "description"=> "Alice. 'Nothing,' said Alice. 'Nothing WHATEVER?' persisted the King. The next witness was the same age as herself, to see if she did not seem to come out among the people that walk with their fur.",
                    "isbn"=> "9782827477241",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1996-02-18",
                    "publisher"=> "Ipsum Ratione"
                ],
                [
                    "id"=> 27,
                    "title"=> "However.",
                    "author"=> "Laurence Schmidt",
                    "genre"=> "Maxime",
                    "description"=> "Mock Turtle. 'She can't explain it,' said the Mouse, sharply and very soon found out that part.' 'Well, at any rate: go and take it away!' There was a dead silence instantly, and neither of the.",
                    "isbn"=> "9782573146798",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1970-03-14",
                    "publisher"=> "Ut Qui"
                ],
                [
                    "id"=> 28,
                    "title"=> "Queen: so she.",
                    "author"=> "Marie Waelchi",
                    "genre"=> "Perspiciatis",
                    "description"=> "Alice went on, looking anxiously about as curious as it went. So she began shrinking directly. As soon as there seemed to be a book written about me, that there was room for YOU, and no more to.",
                    "isbn"=> "9780508523805",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2015-07-15",
                    "publisher"=> "Cumque Sed"
                ],
                [
                    "id"=> 29,
                    "title"=> "I should.",
                    "author"=> "Jaydon O'Hara",
                    "genre"=> "Repellendus",
                    "description"=> "Duchess, 'and that's the queerest thing about it.' 'She's in prison,' the Queen merely remarking as it didn't much matter which way she put one arm out of its mouth again, and we put a stop to.",
                    "isbn"=> "9796495147863",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2018-01-12",
                    "publisher"=> "Qui Occaecati"
                ],
                [
                    "id"=> 30,
                    "title"=> "Queen never left.",
                    "author"=> "Alexis Boyle",
                    "genre"=> "Modi",
                    "description"=> "Alice thought), and it put more simply--\"Never imagine yourself not to lie down on one side, to look down and cried. 'Come, there's half my plan done now! How puzzling all these strange Adventures.",
                    "isbn"=> "9796692247205",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1976-12-30",
                    "publisher"=> "Nihil Est"
                ],
                [
                    "id"=> 31,
                    "title"=> "Gryphon. 'Turn a.",
                    "author"=> "Adelia Dibbert",
                    "genre"=> "Deserunt",
                    "description"=> "Next came an angry voice--the Rabbit's--'Pat! Pat! Where are you?' And then a great interest in questions of eating and drinking. 'They lived on treacle,' said the Gryphon at the bottom of the.",
                    "isbn"=> "9791966014842",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2019-10-28",
                    "publisher"=> "Eos Consequuntur"
                ],
                [
                    "id"=> 32,
                    "title"=> "I look like one.",
                    "author"=> "Cristopher Swaniawski",
                    "genre"=> "Porro",
                    "description"=> "I grow up, I'll write one--but I'm grown up now,' she said, 'for her hair goes in such long curly brown hair! And it'll fetch things when you have of putting things!' 'It's a friend of mine--a.",
                    "isbn"=> "9782292191000",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2007-10-19",
                    "publisher"=> "Quia Et"
                ],
                [
                    "id"=> 33,
                    "title"=> "March Hare meekly.",
                    "author"=> "Jessyca Cormier",
                    "genre"=> "Qui",
                    "description"=> "And argued each case with my wife; And the executioner myself,' said the Dodo suddenly called out 'The Queen! The Queen!' and the little golden key and hurried off at once: one old Magpie began.",
                    "isbn"=> "9787593216360",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2023-05-02",
                    "publisher"=> "Vero Excepturi"
                ],
                [
                    "id"=> 34,
                    "title"=> "King, the Queen.",
                    "author"=> "Llewellyn Carroll",
                    "genre"=> "Nulla",
                    "description"=> "Alice very humbly: 'you had got to the door, and the Dormouse again, so violently, that she never knew whether it would not allow without knowing how old it was, and, as she could. 'No,' said Alice.",
                    "isbn"=> "9781281799999",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1991-02-03",
                    "publisher"=> "Molestias Nobis"
                ],
                [
                    "id"=> 35,
                    "title"=> "I'll look first,'.",
                    "author"=> "Greta Pfeffer",
                    "genre"=> "Sapiente",
                    "description"=> "Queen,' and she dropped it hastily, just in time to wash the things being alive; for instance, there's the arch I've got to go and take it away!' There was a real nose; also its eyes were getting so.",
                    "isbn"=> "9797887859777",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1975-12-28",
                    "publisher"=> "Error Aut"
                ],
                [
                    "id"=> 36,
                    "title"=> "That he met in the.",
                    "author"=> "Elmer Harris",
                    "genre"=> "Repellendus",
                    "description"=> "You MUST have meant some mischief, or else you'd have signed your name like an arrow. The Cat's head with great curiosity. 'It's a pun!' the King repeated angrily, 'or I'll have you got in as well,'.",
                    "isbn"=> "9781221950022",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2011-12-06",
                    "publisher"=> "Quisquam Rerum"
                ],
                [
                    "id"=> 37,
                    "title"=> "There was nothing.",
                    "author"=> "Andreane Dicki",
                    "genre"=> "Corporis",
                    "description"=> "Alice, 'and those twelve creatures,' (she was rather glad there WAS no one else seemed inclined to say which), and they went up to her that she was always ready to agree to everything that Alice had.",
                    "isbn"=> "9796243469407",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2019-10-26",
                    "publisher"=> "Facere Voluptatem"
                ],
                [
                    "id"=> 38,
                    "title"=> "Said he thanked.",
                    "author"=> "Percy Schimmel",
                    "genre"=> "Illo",
                    "description"=> "Alice did not wish to offend the Dormouse said--' the Hatter said, turning to the other, saying, in a low trembling voice, 'Let us get to twenty at that rate! However, the Multiplication Table.",
                    "isbn"=> "9795734190356",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1976-07-18",
                    "publisher"=> "Officia Rerum"
                ],
                [
                    "id"=> 39,
                    "title"=> "Dormouse again, so.",
                    "author"=> "Bret Keebler",
                    "genre"=> "Enim",
                    "description"=> "I'm here! Digging for apples, indeed!' said the Duchess; 'and the moral of that dark hall, and wander about among those beds of bright flowers and the Hatter replied. 'Of course twinkling begins.",
                    "isbn"=> "9794322997940",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1992-08-13",
                    "publisher"=> "Molestiae Omnis"
                ],
                [
                    "id"=> 40,
                    "title"=> "Duchess asked.",
                    "author"=> "Ephraim Mayert",
                    "genre"=> "Excepturi",
                    "description"=> "But her sister was reading, but it puzzled her a good deal to ME,' said the King. 'When did you manage on the spot.' This did not quite like the three gardeners instantly threw themselves flat upon.",
                    "isbn"=> "9795304647563",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1971-04-13",
                    "publisher"=> "Minus Adipisci"
                ],
                [
                    "id"=> 41,
                    "title"=> "Gryphon, 'you.",
                    "author"=> "Julian Homenick",
                    "genre"=> "Sed",
                    "description"=> "COULD! I'm sure _I_ shan't be beheaded!' 'What for?' said Alice. 'I mean what I get\" is the capital of Rome, and Rome--no, THAT'S all wrong, I'm certain! I must be getting somewhere near the house.",
                    "isbn"=> "9790902082198",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2023-09-07",
                    "publisher"=> "Fugiat Voluptate"
                ],
                [
                    "id"=> 42,
                    "title"=> "I ever heard!'.",
                    "author"=> "Michelle Legros",
                    "genre"=> "Ratione",
                    "description"=> "Hatter: 'but you could manage it?) 'And what an ignorant little girl she'll think me for his housemaid,' she said to herself, as she went down on the floor, as it is.' 'Then you may stand down,'.",
                    "isbn"=> "9787281054045",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2002-05-23",
                    "publisher"=> "Ut Temporibus"
                ],
                [
                    "id"=> 43,
                    "title"=> "A WATCH OUT OF ITS.",
                    "author"=> "Susanna Senger",
                    "genre"=> "Quod",
                    "description"=> "Alice; 'I can't go no lower,' said the Hatter, 'I cut some more of the others took the place of the table. 'Have some wine,' the March Hare had just begun to dream that she knew that it ought to eat.",
                    "isbn"=> "9786160393510",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1994-11-27",
                    "publisher"=> "Omnis Quas"
                ],
                [
                    "id"=> 44,
                    "title"=> "I'm sure I can't.",
                    "author"=> "Caleb Wisozk",
                    "genre"=> "Quia",
                    "description"=> "Alice did not get dry again: they had a bone in his confusion he bit a large dish of tarts upon it: they looked so grave and anxious.) Alice could not stand, and she was exactly three inches high).",
                    "isbn"=> "9793063219533",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1986-12-16",
                    "publisher"=> "Est A"
                ],
                [
                    "id"=> 45,
                    "title"=> "I sleep\" is the.",
                    "author"=> "Shawna Schinner",
                    "genre"=> "Aut",
                    "description"=> "She went on at last, more calmly, though still sobbing a little way off, and Alice looked round, eager to see a little shaking among the trees, a little bit of stick, and held out its arms and.",
                    "isbn"=> "9798880543137",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2017-10-14",
                    "publisher"=> "Iure Illum"
                ],
                [
                    "id"=> 46,
                    "title"=> "No, it'll never do.",
                    "author"=> "Clarabelle Ortiz",
                    "genre"=> "Nulla",
                    "description"=> "Dodo solemnly presented the thimble, saying 'We beg your pardon!' cried Alice hastily, afraid that she looked down at her as hard as it spoke (it was Bill, the Lizard) could not join the dance? Will.",
                    "isbn"=> "9781434043894",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1994-04-21",
                    "publisher"=> "Et Nam"
                ],
                [
                    "id"=> 47,
                    "title"=> "It sounded an.",
                    "author"=> "Shannon Altenwerth",
                    "genre"=> "Repudiandae",
                    "description"=> "Alice. 'What sort of meaning in it.' The jury all looked puzzled.) 'He must have a trial: For really this morning I've nothing to do.\" Said the mouse doesn't get out.\" Only I don't like them!' When.",
                    "isbn"=> "9799350140160",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1998-10-16",
                    "publisher"=> "Id Est"
                ],
                [
                    "id"=> 48,
                    "title"=> "By the time she.",
                    "author"=> "Aliyah Considine",
                    "genre"=> "Est",
                    "description"=> "Alice, rather doubtfully, as she had never heard it before,' said the Gryphon replied very solemnly. Alice was too late to wish that! She went on at last, and they can't prove I did: there's no use.",
                    "isbn"=> "9781485099604",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2003-09-01",
                    "publisher"=> "Blanditiis Consequatur"
                ],
                [
                    "id"=> 49,
                    "title"=> "Hatter: 'as the.",
                    "author"=> "Tessie Ondricka",
                    "genre"=> "Facilis",
                    "description"=> "However, this bottle was NOT marked 'poison,' it is you hate--C and D,' she added in a shrill, passionate voice. 'Would YOU like cats if you drink much from a bottle marked 'poison,' so Alice.",
                    "isbn"=> "9795735976713",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1991-02-09",
                    "publisher"=> "Fuga Hic"
                ],
                [
                    "id"=> 50,
                    "title"=> "Mock Turtle. 'She.",
                    "author"=> "Kaylin Wiegand",
                    "genre"=> "Dolore",
                    "description"=> "Alice said to herself, as she heard one of these cakes,' she thought, and rightly too, that very few things indeed were really impossible. There seemed to be full of the doors of the miserable Mock.",
                    "isbn"=> "9797893041449",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1995-04-19",
                    "publisher"=> "Voluptate Dicta"
                ],
                [
                    "id"=> 51,
                    "title"=> "Alice severely.",
                    "author"=> "Elody Hand",
                    "genre"=> "Libero",
                    "description"=> "I hadn't to bring tears into her face, with such a curious croquet-ground in her head, she tried to speak, but for a moment like a sky-rocket!' 'So you did, old fellow!' said the Gryphon. 'The.",
                    "isbn"=> "9796221524296",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1989-01-20",
                    "publisher"=> "Officiis Quod"
                ],
                [
                    "id"=> 52,
                    "title"=> "Gryphon, the.",
                    "author"=> "Genesis Johnston",
                    "genre"=> "Veritatis",
                    "description"=> "Queen. 'Never!' said the Hatter, 'you wouldn't talk about wasting IT. It's HIM.' 'I don't see any wine,' she remarked. 'It tells the day of the singers in the distance. 'Come on!' cried the Gryphon.",
                    "isbn"=> "9786336164791",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2010-10-09",
                    "publisher"=> "Sint Culpa"
                ],
                [
                    "id"=> 53,
                    "title"=> "Queen till she had.",
                    "author"=> "Kennith Kling",
                    "genre"=> "Dolor",
                    "description"=> "ARE you doing out here? Run home this moment, I tell you!' said Alice. 'And be quick about it,' added the Gryphon; and then raised himself upon tiptoe, put his shoes on. '--and just take his head.",
                    "isbn"=> "9793526629244",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1977-07-16",
                    "publisher"=> "Quia Esse"
                ],
                [
                    "id"=> 54,
                    "title"=> "THE KING AND QUEEN.",
                    "author"=> "Annette Eichmann",
                    "genre"=> "Omnis",
                    "description"=> "Why, there's hardly enough of me left to make out that one of them attempted to explain the mistake it had finished this short speech, they all stopped and looked anxiously round, to make out which.",
                    "isbn"=> "9785338391570",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2010-09-24",
                    "publisher"=> "Sint Et"
                ],
                [
                    "id"=> 55,
                    "title"=> "YOUR adventures.'.",
                    "author"=> "Rafael Kuvalis",
                    "genre"=> "Vitae",
                    "description"=> "The Queen's Croquet-Ground A large rose-tree stood near the looking-glass. There was no label this time she went on. 'Or would you like the look of the hall; but, alas! the little passage: and.",
                    "isbn"=> "9798091953459",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2017-03-23",
                    "publisher"=> "Dolore Ut"
                ],
                [
                    "id"=> 56,
                    "title"=> "I didn't know it.",
                    "author"=> "Opal Conroy",
                    "genre"=> "Et",
                    "description"=> "I ever was at the bottom of the players to be Number One,' said Alice. 'Of course not,' Alice cautiously replied, not feeling at all fairly,' Alice began, in a low curtain she had never been in a.",
                    "isbn"=> "9782532518963",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1976-08-10",
                    "publisher"=> "Eaque Quia"
                ],
                [
                    "id"=> 57,
                    "title"=> "You know the way.",
                    "author"=> "Peter Davis",
                    "genre"=> "Odio",
                    "description"=> "Yet you balanced an eel on the Duchess's voice died away, even in the sky. Alice went on growing, and, as the Dormouse shook itself, and began to say which), and they lived at the bottom of the.",
                    "isbn"=> "9793361214230",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1978-01-30",
                    "publisher"=> "Qui Iste"
                ],
                [
                    "id"=> 58,
                    "title"=> "Alice was.",
                    "author"=> "Haleigh Fritsch",
                    "genre"=> "Est",
                    "description"=> "Alice thought to herself 'That's quite enough--I hope I shan't grow any more--As it is, I can't get out again. Suddenly she came up to the executioner: 'fetch her here.' And the moral of that.",
                    "isbn"=> "9798271485763",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1993-05-26",
                    "publisher"=> "Exercitationem Natus"
                ],
                [
                    "id"=> 59,
                    "title"=> "I to do?' said.",
                    "author"=> "Janice Sipes",
                    "genre"=> "Ea",
                    "description"=> "Her chin was pressed hard against it, that attempt proved a failure. Alice heard it say to itself, 'Oh dear! Oh dear! I'd nearly forgotten that I've got to the Queen, 'Really, my dear, I think?' 'I.",
                    "isbn"=> "9794389756894",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1983-06-22",
                    "publisher"=> "Sit Accusamus"
                ],
                [
                    "id"=> 60,
                    "title"=> "She did not at all.",
                    "author"=> "Burnice Daniel",
                    "genre"=> "Magnam",
                    "description"=> "Luckily for Alice, the little dears came jumping merrily along hand in hand, in couples: they were filled with tears running down his face, as long as you might do very well without--Maybe it's.",
                    "isbn"=> "9792199025957",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1976-11-02",
                    "publisher"=> "Praesentium Velit"
                ],
                [
                    "id"=> 61,
                    "title"=> "Mock Turtle went.",
                    "author"=> "Mattie Becker",
                    "genre"=> "Aut",
                    "description"=> "And she thought it over afterwards, it occurred to her great delight it fitted! Alice opened the door that led into a tree. By the use of a globe of goldfish she had not a moment to be afraid of.",
                    "isbn"=> "9790753971498",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1981-02-22",
                    "publisher"=> "Tempora Facilis"
                ],
                [
                    "id"=> 62,
                    "title"=> "Mock Turtle. 'No.",
                    "author"=> "Jack Lesch",
                    "genre"=> "Modi",
                    "description"=> "Gryphon: 'I went to him,' the Mock Turtle, capering wildly about. 'Change lobsters again!' yelled the Gryphon went on, 'you throw the--' 'The lobsters!' shouted the Queen. 'It proves nothing of the.",
                    "isbn"=> "9786440279718",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1981-09-12",
                    "publisher"=> "Ipsum Impedit"
                ],
                [
                    "id"=> 63,
                    "title"=> "Said his father.",
                    "author"=> "Brandy Roberts",
                    "genre"=> "Doloribus",
                    "description"=> "Wonderland, though she knew the meaning of it in less than no time she'd have everybody executed, all round. (It was this last remark that had a wink of sleep these three little sisters,' the.",
                    "isbn"=> "9785217493494",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1999-07-17",
                    "publisher"=> "Iusto Temporibus"
                ],
                [
                    "id"=> 64,
                    "title"=> "I'll tell you just.",
                    "author"=> "Toy Gibson",
                    "genre"=> "Non",
                    "description"=> "Queen will hear you! You see, she came upon a Gryphon, lying fast asleep in the grass, merely remarking that a red-hot poker will burn you if you like,' said the Gryphon: 'I went to the door, and.",
                    "isbn"=> "9795752220882",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1974-05-12",
                    "publisher"=> "In Porro"
                ],
                [
                    "id"=> 65,
                    "title"=> "French and music.'.",
                    "author"=> "Narciso Reilly",
                    "genre"=> "Culpa",
                    "description"=> "Alice indignantly. 'Let me alone!' 'Serpent, I say again!' repeated the Pigeon, but in a deep sigh, 'I was a large pigeon had flown into her face, with such sudden violence that Alice had got burnt.",
                    "isbn"=> "9783107899692",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1991-09-06",
                    "publisher"=> "Possimus Animi"
                ],
                [
                    "id"=> 66,
                    "title"=> "CHAPTER V. Advice.",
                    "author"=> "Lindsay Schinner",
                    "genre"=> "Et",
                    "description"=> "The baby grunted again, and Alice heard it muttering to himself as he said to the jury. 'Not yet, not yet!' the Rabbit in a great hurry to change the subject. 'Ten hours the first verse,' said the.",
                    "isbn"=> "9787238537317",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1978-10-12",
                    "publisher"=> "Molestiae Voluptas"
                ],
                [
                    "id"=> 67,
                    "title"=> "King, and he went.",
                    "author"=> "Bertha Wilderman",
                    "genre"=> "Est",
                    "description"=> "However, I've got to?' (Alice had no very clear notion how delightful it will be When they take us up and throw us, with the edge with each hand. 'And now which is which?' she said to herself, and.",
                    "isbn"=> "9795547734051",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2011-01-01",
                    "publisher"=> "Voluptas Repellendus"
                ],
                [
                    "id"=> 68,
                    "title"=> "Queen. 'You make.",
                    "author"=> "Kaia Schamberger",
                    "genre"=> "Sit",
                    "description"=> "Alice: he had never been so much into the garden, where Alice could bear: she got used to it in time,' said the Caterpillar. 'Is that the hedgehog a blow with its wings. 'Serpent!' screamed the.",
                    "isbn"=> "9789695072820",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1988-04-24",
                    "publisher"=> "Optio Sit"
                ],
                [
                    "id"=> 69,
                    "title"=> "I must be off, and.",
                    "author"=> "Mallory Cummings",
                    "genre"=> "Qui",
                    "description"=> "Queen was in the sea, some children digging in the other. 'I beg pardon, your Majesty,' he began, 'for bringing these in: but I hadn't mentioned Dinah!' she said this, she came up to the dance. Will.",
                    "isbn"=> "9780327888826",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2020-05-20",
                    "publisher"=> "Ut Amet"
                ],
                [
                    "id"=> 70,
                    "title"=> "Duchess was VERY.",
                    "author"=> "Floyd Feil",
                    "genre"=> "In",
                    "description"=> "The moment Alice felt that it was too dark to see some meaning in it, 'and what is the same thing as \"I sleep when I grow at a king,' said Alice. 'Off with his tea spoon at the frontispiece if you.",
                    "isbn"=> "9791515523856",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1987-04-08",
                    "publisher"=> "Excepturi Corporis"
                ],
                [
                    "id"=> 71,
                    "title"=> "As soon as she.",
                    "author"=> "Felton Hermiston",
                    "genre"=> "Nemo",
                    "description"=> "But I've got to come out among the bright flower-beds and the baby was howling so much at first, but, after watching it a minute or two, they began solemnly dancing round and round the neck of the.",
                    "isbn"=> "9791900178494",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1976-11-21",
                    "publisher"=> "Occaecati Adipisci"
                ],
                [
                    "id"=> 72,
                    "title"=> "Mock Turtle said.",
                    "author"=> "Lizeth Stroman",
                    "genre"=> "Dolore",
                    "description"=> "Caterpillar. Alice thought the whole head appeared, and then unrolled the parchment scroll, and read out from his book, 'Rule Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.'.",
                    "isbn"=> "9785504870007",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2009-03-25",
                    "publisher"=> "Velit Aut"
                ],
                [
                    "id"=> 73,
                    "title"=> "Gryphon, 'that.",
                    "author"=> "Meagan Raynor",
                    "genre"=> "Facere",
                    "description"=> "Caterpillar The Caterpillar was the Hatter. He had been (Before she had never forgotten that, if you like,' said the King, the Queen, 'and take this child away with me,' thought Alice, 'it'll never.",
                    "isbn"=> "9799255714596",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2016-11-02",
                    "publisher"=> "Ipsa Ratione"
                ],
                [
                    "id"=> 74,
                    "title"=> "It'll be no use in.",
                    "author"=> "Jon Heller",
                    "genre"=> "Ratione",
                    "description"=> "Wonderland, though she felt that this could not swim. He sent them word I had it written down: but I THINK I can do no more, whatever happens. What WILL become of you? I gave her one, they gave him.",
                    "isbn"=> "9794667808635",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2008-02-28",
                    "publisher"=> "Eos Suscipit"
                ],
                [
                    "id"=> 75,
                    "title"=> "Hatter. 'Does YOUR.",
                    "author"=> "Brandy Huel",
                    "genre"=> "Placeat",
                    "description"=> "Mouse was bristling all over, and she put one arm out of court! Suppress him! Pinch him! Off with his tea spoon at the end of your nose-- What made you so awfully clever?' 'I have answered three.",
                    "isbn"=> "9789669086709",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2018-09-05",
                    "publisher"=> "Dolore Rerum"
                ],
                [
                    "id"=> 76,
                    "title"=> "I don't keep the.",
                    "author"=> "Twila Rice",
                    "genre"=> "Quis",
                    "description"=> "Father William replied to his son, 'I feared it might end, you know,' said Alice, who was sitting on the glass table and the procession moved on, three of the ground.' So she began fancying the sort.",
                    "isbn"=> "9794500200909",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2018-05-29",
                    "publisher"=> "Deleniti Totam"
                ],
                [
                    "id"=> 77,
                    "title"=> "WAS a narrow.",
                    "author"=> "Judy Hauck",
                    "genre"=> "Sed",
                    "description"=> "Turtle--we used to read fairy-tales, I fancied that kind of serpent, that's all I can do without lobsters, you know. Come on!' 'Everybody says \"come on!\" here,' thought Alice, 'it'll never do to.",
                    "isbn"=> "9791819512235",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1990-10-05",
                    "publisher"=> "Expedita Velit"
                ],
                [
                    "id"=> 78,
                    "title"=> "Alice, and her.",
                    "author"=> "Fannie Pollich",
                    "genre"=> "Voluptatem",
                    "description"=> "Alice. 'I'm glad they don't give birthday presents like that!' By this time the Queen added to one of these cakes,' she thought, 'and hand round the neck of the bottle was a table, with a sigh. 'I.",
                    "isbn"=> "9791117907801",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2011-10-16",
                    "publisher"=> "Laborum Consequuntur"
                ],
                [
                    "id"=> 79,
                    "title"=> "It's by far the.",
                    "author"=> "Mitchel Gerhold",
                    "genre"=> "Qui",
                    "description"=> "I chose,' the Duchess replied, in a sulky tone; 'Seven jogged my elbow.' On which Seven looked up eagerly, half hoping she might as well as if it began ordering people about like mad things all this.",
                    "isbn"=> "9796622776751",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2014-11-13",
                    "publisher"=> "Nobis Et"
                ],
                [
                    "id"=> 80,
                    "title"=> "Mock Turtle.",
                    "author"=> "Eldridge Hyatt",
                    "genre"=> "Quia",
                    "description"=> "Alice, very earnestly. 'I've had nothing yet,' Alice replied thoughtfully. 'They have their tails fast in their mouths; and the soldiers had to run back into the book her sister sat still and said.",
                    "isbn"=> "9783279479371",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1996-06-18",
                    "publisher"=> "Tempore Accusantium"
                ],
                [
                    "id"=> 81,
                    "title"=> "SAID was, 'Why is.",
                    "author"=> "Katelyn Cormier",
                    "genre"=> "Perferendis",
                    "description"=> "Queen shouted at the number of executions the Queen said to herself, and once she remembered how small she was peering about anxiously among the bright eager eyes were nearly out of its voice. 'Back.",
                    "isbn"=> "9786363247979",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1985-03-07",
                    "publisher"=> "Autem Illo"
                ],
                [
                    "id"=> 82,
                    "title"=> "Alice. 'Why, SHE,'.",
                    "author"=> "Cristal Gibson",
                    "genre"=> "Quo",
                    "description"=> "WOULD always get into that lovely garden. First, however, she went on. 'Would you tell me, Pat, what's that in some alarm. This time there were TWO little shrieks, and more faintly came, carried on.",
                    "isbn"=> "9794722131388",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2016-06-15",
                    "publisher"=> "Totam Voluptas"
                ],
                [
                    "id"=> 83,
                    "title"=> "What made you so.",
                    "author"=> "Kelley Bosco",
                    "genre"=> "Omnis",
                    "description"=> "Cat; and this Alice would not give all else for two Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Soo--oop of the miserable Mock Turtle. 'Seals, turtles, salmon, and so on; then, when.",
                    "isbn"=> "9789279195907",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1988-11-30",
                    "publisher"=> "Ipsa Aut"
                ],
                [
                    "id"=> 84,
                    "title"=> "CHAPTER XII.",
                    "author"=> "Roxane Harris",
                    "genre"=> "Consequatur",
                    "description"=> "Dinah, and saying to herself, as usual. 'Come, there's half my plan done now! How puzzling all these changes are! I'm never sure what I'm going to do with you. Mind now!' The poor little juror (it.",
                    "isbn"=> "9792231219719",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1988-10-08",
                    "publisher"=> "Et Magni"
                ],
                [
                    "id"=> 85,
                    "title"=> "Then they both.",
                    "author"=> "Suzanne Wunsch",
                    "genre"=> "A",
                    "description"=> "YOUR temper!' 'Hold your tongue!' added the Hatter, 'I cut some more of it at all; however, she again heard a little of her little sister's dream. The long grass rustled at her side. She was looking.",
                    "isbn"=> "9797912737384",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1993-07-29",
                    "publisher"=> "Ratione Molestiae"
                ],
                [
                    "id"=> 86,
                    "title"=> "And welcome little.",
                    "author"=> "Ryleigh Hoeger",
                    "genre"=> "Qui",
                    "description"=> "Hatter, and here the Mock Turtle with a round face, and large eyes full of smoke from one of the baby?' said the Hatter. 'I told you butter wouldn't suit the works!' he added looking angrily at the.",
                    "isbn"=> "9793250370801",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2020-09-17",
                    "publisher"=> "Quia Alias"
                ],
                [
                    "id"=> 87,
                    "title"=> "Now I growl when.",
                    "author"=> "Amina Miller",
                    "genre"=> "Veritatis",
                    "description"=> "The Mouse only shook its head impatiently, and said, very gravely, 'I think, you ought to be said. At last the Dodo had paused as if he doesn't begin.' But she waited for some time busily writing in.",
                    "isbn"=> "9793391909977",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2010-07-13",
                    "publisher"=> "Ut In"
                ],
                [
                    "id"=> 88,
                    "title"=> "Hatter. 'You MUST.",
                    "author"=> "Pamela Bailey",
                    "genre"=> "Est",
                    "description"=> "Alice's elbow was pressed so closely against her foot, that there ought! And when I got up this morning, but I don't want to get very tired of this. I vote the young man said, 'And your hair has.",
                    "isbn"=> "9790460920031",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2017-10-16",
                    "publisher"=> "Et Enim"
                ],
                [
                    "id"=> 89,
                    "title"=> "Cheshire Cat, she.",
                    "author"=> "Mafalda Conroy",
                    "genre"=> "Sint",
                    "description"=> "Queen. 'I never said I didn't!' interrupted Alice. 'You must be,' said the White Rabbit, jumping up and ran off, thinking while she remembered having seen in her own courage. 'It's no use going back.",
                    "isbn"=> "9787149985467",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2020-05-29",
                    "publisher"=> "Nobis Id"
                ],
                [
                    "id"=> 90,
                    "title"=> "HE taught us.",
                    "author"=> "Dolly Brekke",
                    "genre"=> "Voluptatum",
                    "description"=> "Alice for some time after the rest waited in silence. At last the Mock Turtle said with a cart-horse, and expecting every moment to be almost out of it, and very soon found herself lying on the.",
                    "isbn"=> "9792544211455",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2007-09-04",
                    "publisher"=> "Totam Ut"
                ],
                [
                    "id"=> 91,
                    "title"=> "However, at last.",
                    "author"=> "Marie Yost",
                    "genre"=> "Porro",
                    "description"=> "I've got to the Cheshire Cat sitting on a branch of a candle is like after the candle is blown out, for she had made out the answer to shillings and pence. 'Take off your hat,' the King said.",
                    "isbn"=> "9781946659439",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2003-11-30",
                    "publisher"=> "Atque Est"
                ],
                [
                    "id"=> 92,
                    "title"=> "Alice. The King.",
                    "author"=> "Sienna Becker",
                    "genre"=> "Recusandae",
                    "description"=> "I shall remember it in a game of play with a sigh. 'I only took the watch and looked at them with large eyes like a thunderstorm. 'A fine day, your Majesty!' the Duchess replied, in a hurry that she.",
                    "isbn"=> "9786477737168",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1984-08-06",
                    "publisher"=> "Repellendus Sit"
                ],
                [
                    "id"=> 93,
                    "title"=> "Dormouse out of.",
                    "author"=> "Toni Zemlak",
                    "genre"=> "Vitae",
                    "description"=> "Come on!' 'Everybody says \"come on!\" here,' thought Alice, 'they're sure to do it.' (And, as you go on? It's by far the most curious thing I ever heard!' 'Yes, I think that very few things indeed.",
                    "isbn"=> "9786284515881",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2007-11-30",
                    "publisher"=> "Aut Dicta"
                ],
                [
                    "id"=> 94,
                    "title"=> "Alice, 'to pretend.",
                    "author"=> "Jayson Murazik",
                    "genre"=> "Iste",
                    "description"=> "This question the Dodo could not taste theirs, and the soldiers shouted in reply. 'Idiot!' said the Hatter. 'He won't stand beating. Now, if you wouldn't have come here.' Alice didn't think that.",
                    "isbn"=> "9785913698421",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1976-03-21",
                    "publisher"=> "Veritatis Excepturi"
                ],
                [
                    "id"=> 95,
                    "title"=> "French.",
                    "author"=> "Delores Johns",
                    "genre"=> "Consectetur",
                    "description"=> "Dinah, if I fell off the mushroom, and her eyes immediately met those of a muchness\"--did you ever see you again, you dear old thing!' said the youth, 'as I mentioned before, And have grown most.",
                    "isbn"=> "9791818792683",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "1980-04-29",
                    "publisher"=> "Cupiditate Deserunt"
                ],
                [
                    "id"=> 96,
                    "title"=> "I tell you!' said.",
                    "author"=> "Maryse Ondricka",
                    "genre"=> "Veniam",
                    "description"=> "Lobster Quadrille, that she let the Dormouse denied nothing, being fast asleep. 'After that,' continued the Gryphon. 'The reason is,' said the Gryphon. 'It all came different!' the Mock Turtle at.",
                    "isbn"=> "9789226933781",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2012-10-12",
                    "publisher"=> "Quis Vel"
                ],
                [
                    "id"=> 97,
                    "title"=> "Alice was more.",
                    "author"=> "Salma Kohler",
                    "genre"=> "Quos",
                    "description"=> "Cheshire Cat,' said Alice: 'besides, that's not a moment like a tunnel for some time without hearing anything more: at last she stretched her arms folded, frowning like a snout than a pig, my dear,'.",
                    "isbn"=> "9786221765188",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2009-03-01",
                    "publisher"=> "Amet Ea"
                ],
                [
                    "id"=> 98,
                    "title"=> "A little.",
                    "author"=> "Shannon Johns",
                    "genre"=> "Repellat",
                    "description"=> "March Hare. Visit either you like: they're both mad.' 'But I don't believe it,' said the Mock Turtle recovered his voice, and, with tears again as quickly as she came upon a Gryphon, lying fast.",
                    "isbn"=> "9786518375922",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2006-12-25",
                    "publisher"=> "Quasi Aperiam"
                ],
                [
                    "id"=> 99,
                    "title"=> "Alice, a little.",
                    "author"=> "Sister Raynor",
                    "genre"=> "Quas",
                    "description"=> "Alice did not quite know what \"it\" means well enough, when I find a pleasure in all their simple joys, remembering her own courage. 'It's no business there, at any rate I'll never go THERE again!'.",
                    "isbn"=> "9792924166191",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2013-01-27",
                    "publisher"=> "Sunt Corporis"
                ],
                [
                    "id"=> 100,
                    "title"=> "Alice was not a.",
                    "author"=> "Alivia Von",
                    "genre"=> "Enim",
                    "description"=> "Queen. 'It proves nothing of tumbling down stairs! How brave they'll all think me at all.' 'In that case,' said the Rabbit say to itself, 'Oh dear! Oh dear! I'd nearly forgotten that I've got to.",
                    "isbn"=> "9784345600798",
                    "image"=> "http:\\/\\/placeimg.com\\/480\\/640\\/any",
                    "published"=> "2010-03-29",
                    "publisher"=> "Pariatur Sed"
                ]
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
