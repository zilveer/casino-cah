<?php

namespace xLink\Tests\Cards\Results;

use xLink\Poker\Cards\Results\SevenCardResult;
use xLink\Poker\Cards\CardCollection;
use xLink\Poker\Cards\Card;

class SevenCardResultTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    /** @test */
    public function royal_flush_result_test()
    {
        $expected = CardCollection::fromString('10c Jc Qc Kc Ac');

        $expectedResult = SevenCardResult::createRoyalFlush($expected);

        $this->assertEquals(SevenCardResult::ROYAL_FLUSH, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function straight_flush_result_test()
    {
        $expected = CardCollection::fromString('9c Tc Jc Qc Kc');

        $expectedResult = SevenCardResult::createStraightFlush($expected);

        $this->assertEquals(SevenCardResult::STRAIGHT_FLUSH, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function four_of_a_kind_result_test()
    {
        $expected = CardCollection::fromString('Tc Qc Qd Qh Qs');

        $expectedResult = SevenCardResult::createFourOfAKind($expected);

        $this->assertEquals(SevenCardResult::FOUR_OF_A_KIND, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function full_house_result_test()
    {
        $expected = CardCollection::fromString('Qd Qc Qc 8d 8h');

        $expectedResult = SevenCardResult::createFullHouse($expected);

        $this->assertEquals(SevenCardResult::FULL_HOUSE, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function flush_result_test()
    {
        $expected = CardCollection::fromString('7c Tc Jc Qc Kc');

        $expectedResult = SevenCardResult::createFlush($expected);

        $this->assertEquals(SevenCardResult::FLUSH, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function straight_result_test()
    {
        $expected = CardCollection::fromString('5c 6h 7d 8c 9d');

        $expectedResult = SevenCardResult::createStraight($expected);

        $this->assertEquals(SevenCardResult::STRAIGHT, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function straight_ace_high_result_test()
    {
        $expected = CardCollection::fromString('10c Jc Qc Kc 14d');

        $expectedResult = SevenCardResult::createStraight($expected);

        $this->assertEquals(SevenCardResult::STRAIGHT, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function straight_ace_low_result_test()
    {
        $expected = CardCollection::fromString('Ad 2c 3c 4c 5d');

        $expectedResult = SevenCardResult::createStraight($expected);

        $this->assertEquals(SevenCardResult::STRAIGHT, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function three_of_a_kind_result_test()
    {
        $expected = CardCollection::fromString('Qd Qs Qh 8d 10c');

        $expectedResult = SevenCardResult::createThreeOfAKind($expected);

        $this->assertEquals(SevenCardResult::THREE_OF_A_KIND, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function two_pair_result_test()
    {
        $expected = CardCollection::fromString('Qd Qc 10c 8d 8h');

        $expectedResult = SevenCardResult::createTwoPair($expected);

        $this->assertEquals(SevenCardResult::TWO_PAIR, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function one_pair_result_test()
    {
        $expected = CardCollection::fromString('Qd Qc 10c 8d 7s');

        $expectedResult = SevenCardResult::createOnePair($expected);

        $this->assertEquals(SevenCardResult::ONE_PAIR, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function high_card_result_test()
    {
        $expected = CardCollection::fromString('Qd Jc 10c 8d 7s');

        $expectedResult = SevenCardResult::createHighCard($expected);

        $this->assertEquals(SevenCardResult::HIGH_CARD, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }

    /** @test */
    public function high_card_ace_result_test()
    {
        $expected = CardCollection::fromString('8d 10c Jc Qd 14s');

        $expectedResult = SevenCardResult::createHighCard($expected);

        $this->assertEquals(SevenCardResult::HIGH_CARD, $expectedResult->rank());
        $this->assertEquals($expected->__toString(), $expectedResult->cards()->__toString());
//        $this->assertEquals('High Card Q', $expectedResult->definition());
    }
}
