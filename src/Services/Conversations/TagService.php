<?php namespace professionalweb\CarrotQuest\Services\Conversations;

use professionalweb\CarrotQuest\Traits\UseTransport;
use professionalweb\CarrotQuest\Interfaces\Transport;
use professionalweb\CarrotQuest\Interfaces\Services\Conversations\TagService as ITagService;

/**
 * Service to work with tags
 * @package professionalweb\CarrotQuest\Services\Conversations
 */
class TagService implements ITagService
{
    use UseTransport;

    /**
     * @var int
     */
    private $conversationId;

    /**
     * @var int
     */
    private $adminId;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var string
     */
    private $botName;

    public function __construct(Transport $transport)
    {
        $this->setTransport($transport);
    }

    /**
     * @return mixed
     */
    public function send()
    {
        // TODO: Implement send() method.
    }

    /**
     * Set conversation id
     *
     * @param int $id
     *
     * @return ITagService
     */
    public function setConversationId(int $id): ITagService
    {
        $this->conversationId = $id;

        return $this;
    }

    /**
     * Get conversation id
     *
     * @return int
     */
    public function getConversationId(): int
    {
        return $this->conversationId;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return ITagService
     */
    public function tag(string $tag): ITagService
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return null|string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * Delete tag
     *
     * @return bool
     */
    public function delete(): bool
    {
        // TODO: Implement delete() method.
    }

    /**
     * Set replier admin id
     *
     * @param int $adminId
     *
     * @return ITagService
     */
    public function setAdminId(int $adminId): ITagService
    {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * Get admin id
     *
     * @return int|null
     */
    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    /**
     * Set bot name
     *
     * @param string $botName
     *
     * @return ITagService
     */
    public function setBotName(string $botName): ITagService
    {
        $this->botName = $botName;

        return $this;
    }

    /**
     * Get bot name
     *
     * @return null|string
     */
    public function getBotName(): ?string
    {
        return $this->botName;
    }
}