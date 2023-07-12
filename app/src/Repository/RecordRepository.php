<?php
/**
 * Record repository.
 */

namespace App\Repository;

/**
 * Class RecordRepository.
 */
class RecordRepository
{
    /**
     * Data.
     *
     * @var array<int, array<string, mixed>>
     */
    private array $data = [
        1 => [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'content' => 'Lorem ipsum dolor sir nec suscipit est.',
            'tags' => [
                'Sed',
                'convallis',
                'nibh',
            ],
        ],
        2 => [
            'id' => 2,
            'title' => 'Etiam diam ipsum, dignissim eget suscipit nec, faucibus accumsan felis',
            'content' => 'Nullam malesuada egestas metus condimentum egestas facilisis.',
            'tags' => [
                'Phasellus',
                'vestibulum',
                'tortor',
            ],
        ],
        3 => [
            'id' => 3,
            'title' => 'Nullam eget dui blandit, scelerisque lacus a, sagittis nibh',
            'content' => 'Sed hendreinin  oreet libero at pretium sodales.',
            'tags' => [
                'Curabitur',
                'consectetur',
                'porttitor',
            ],
        ],
    ];

    /**
     * Find all.
     *
     * @return array[] Result
     *
     * @psalm-return array<int, array<string, mixed>>
     */
    public function findAll(): array
    {
        return $this->data;
    }

    /**
     * Find one by Id.
     *
     * @param int $id Id
     *
     * @return array<string, mixed>|null Result
     */
    public function findOneById(int $id): ?array
    {
        return count($this->data) && isset($this->data[$id])
            ? $this->data[$id]
            : null;
    }
}
