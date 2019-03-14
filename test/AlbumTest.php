<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 2/26/2019
 * Time: 7:30 PM
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AlbumTest extends TestCase
{
    public function testAlbumHasArtist(): void
    {
        $this->assertClassHasAttribute('artist', Album::class);
    }
    public function testAlbumHasTitle(): void
    {
        $this->assertClassHasAttribute('title', Album::class);
    }
    public function testAlbumHasYear(): void
    {
        $this->assertClassHasAttribute('year', Album::class);
    }
    public function testAlbumHasTotalSongs(): void
    {
        $this->assertClassHasAttribute('totalsongs', Album::class);
    }
    public function testAlbumHasGenre(): void
    {
        $this->assertClassHasAttribute('genre', Album::class);
    }
    public function testAlbumHasGoodRating(): void
    {
        $this->assertTrue(
            method_exists(Album::class, 'goodRating')
        );
    }

    public function testAlbumHasBadRating(): void
    {
        $this->assertTrue(
            method_exists(Album::class, 'badRating')
        );
    }
}
