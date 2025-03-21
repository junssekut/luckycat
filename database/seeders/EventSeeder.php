<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert vendor users
        $pestaporaId = DB::table('users')->insertGetId([
            'name' => 'Pestapora',
            'email' => 'admin@pestapora.id',
            'password' => bcrypt('pestapora@2025'),
            'role' => 'vendor',
        ]);

        $holafestId = DB::table('users')->insertGetId([
            'name' => 'HOLAFEST',
            'email' => 'admin@holafest.id',
            'password' => bcrypt('holafest@2025'),
            'role' => 'vendor',
        ]);

        $synchronizefestId = DB::table('users')->insertGetId([
            'name' => 'SynchronizeFest',
            'email' => 'admin@synchronizefest.id',
            'password' => bcrypt('synchronizefest@2025'),
            'role' => 'vendor',
        ]);

        // Insert events
        $events = [
            [
                'vendor_id' => $pestaporaId,
                'title' => 'Pestapora',
                'description' => 'Join us at Pestapora for an unforgettable experience filled with music, culture, and entertainment. Don\'t miss out on the fun!',
                'price' => 350000,
                'thumbnail' => Storage::url('events/pamungkas.jpeg'),
                'benefits' => [
                    ['benefit' => 'Exclusive photo with the artist', 'description' => 'Get a chance to take an exclusive photo with the performing artist.', 'price' => '50000'],
                    ['benefit' => 'VIP seat', 'description' => 'Enjoy the concert from the best seats in the house.', 'price' => '100000'],
                ]
            ],
            [
                'vendor_id' => $pestaporaId,
                'title' => 'Pestapora',
                'description' => 'Join us at Pestapora for an unforgettable experience filled with music, culture, and entertainment. Don\'t miss out on the fun!',
                'price' => 350000,
                'thumbnail' => Storage::url('events/reality-club.png'),
                'benefits' => [
                    ['benefit' => 'Meet and greet', 'description' => 'Meet the artists backstage before the concert.', 'price' => '75000'],
                    ['benefit' => 'Signed merchandise', 'description' => 'Receive exclusive signed merchandise from the artists.', 'price' => '50000'],
                ]
            ],
            [
                'vendor_id' => $holafestId,
                'title' => 'Holafest - LAZONE.ID',
                'description' => 'Holafest brings you a vibrant celebration of arts, music, and community. Enjoy a day packed with performances and activities for all ages.',
                'price' => 250000,
                'thumbnail' => Storage::url('events/danilla-riyadi.jpeg'),
                'benefits' => [
                    ['benefit' => 'Free drinks', 'description' => 'Get free drinks at the event.', 'price' => '20000'],
                    ['benefit' => 'Exclusive access to VIP lounge', 'description' => 'Access the VIP lounge with complimentary snacks and drinks.', 'price' => '100000'],
                ]
            ],
            [
                'vendor_id' => $holafestId,
                'title' => 'Holafest - LAZONE.ID',
                'description' => 'Holafest brings you a vibrant celebration of arts, music, and community. Enjoy a day packed with performances and activities for all ages.',
                'price' => 250000,
                'thumbnail' => Storage::url('events/hindia.jpeg'),
                'benefits' => [
                    ['benefit' => 'Backstage tour', 'description' => 'Get a guided tour of the backstage area.', 'price' => '50000'],
                    ['benefit' => 'Priority entry', 'description' => 'Skip the line with priority entry to the event.', 'price' => '30000'],
                ]
            ],
            [
                'vendor_id' => $synchronizefestId,
                'title' => 'Synchronize Fest',
                'description' => 'Experience SynchronizeFest, where music lovers unite for an epic festival featuring a diverse lineup of artists and unforgettable performances.',
                'price' => 150000,
                'thumbnail' => Storage::url('events/the-panturas.jpeg'),
                'benefits' => [
                    ['benefit' => 'Exclusive photo with the artist', 'description' => 'Get a chance to take an exclusive photo with the performing artist.', 'price' => '50000'],
                    ['benefit' => 'VIP parking', 'description' => 'Enjoy VIP parking close to the event entrance.', 'price' => '25000'],
                ]
            ],
            [
                'vendor_id' => $synchronizefestId,
                'title' => 'Synchronize Fest',
                'description' => 'Experience SynchronizeFest, where music lovers unite for an epic festival featuring a diverse lineup of artists and unforgettable performances.',
                'price' => 150000,
                'thumbnail' => Storage::url('events/gangga-kusuma.jpeg'),
                'benefits' => [
                    ['benefit' => 'Meet and greet', 'description' => 'Meet the artists backstage before the concert.', 'price' => '75000'],
                    ['benefit' => 'Signed merchandise', 'description' => 'Receive exclusive signed merchandise from the artists.', 'price' => '50000'],
                ]
            ],
            [
                'vendor_id' => $synchronizefestId,
                'title' => 'We The Fest',
                'description' => 'Join us at We The Fest for a spectacular lineup of international and local artists. Enjoy an amazing festival atmosphere.',
                'price' => 400000,
                'thumbnail' => Storage::url('events/we-the-fest.jpg'),
                'benefits' => [
                    ['benefit' => 'VIP access', 'description' => 'Get access to VIP areas with exclusive amenities.', 'price' => '150000'],
                    ['benefit' => 'Exclusive merchandise', 'description' => 'Receive exclusive festival merchandise.', 'price' => '50000'],
                ]
            ],
            [
                'vendor_id' => $holafestId,
                'title' => 'Java Jazz Festival',
                'description' => 'Experience the best of jazz music at the Java Jazz Festival. Enjoy performances by top jazz artists from around the world.',
                'price' => 300000,
                'thumbnail' => Storage::url('events/java-jazz.jpeg'),
                'benefits' => [
                    ['benefit' => 'Meet the artists', 'description' => 'Get a chance to meet the jazz artists.', 'price' => '100000'],
                    ['benefit' => 'VIP seating', 'description' => 'Enjoy the best seats in the house.', 'price' => '200000'],
                ]
            ],
            [
                'vendor_id' => $pestaporaId,
                'title' => 'Djakarta Warehouse Project',
                'description' => 'Dance the night away at the Djakarta Warehouse Project with an electrifying lineup of DJs and electronic music artists.',
                'price' => 500000,
                'thumbnail' => Storage::url('events/dwp.jpg'),
                'benefits' => [
                    ['benefit' => 'Backstage pass', 'description' => 'Get backstage access and meet the DJs.', 'price' => '250000'],
                    ['benefit' => 'Exclusive lounge access', 'description' => 'Access the exclusive lounge with premium amenities.', 'price' => '200000'],
                ]
            ],
        ];

        foreach ($events as $eventData) {
            $eventId = DB::table('events')->insertGetId([
                'vendor_id' => $eventData['vendor_id'],
                'title' => $eventData['title'],
                'description' => $eventData['description'],
                'price' => $eventData['price'],
                'thumbnail' => $eventData['thumbnail'],
            ]);

            foreach ($eventData['benefits'] as $benefit) {
                DB::table('benefits')->insert([
                    'event_id' => $eventId,
                    'benefit' => $benefit['benefit'],
                    'description' => $benefit['description'],
                    'price' => $benefit['price'],
                ]);
            }
        }
    }
}