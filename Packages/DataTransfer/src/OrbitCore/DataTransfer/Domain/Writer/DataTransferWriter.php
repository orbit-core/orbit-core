<?php
declare(strict_types=1);

namespace OrbitCore\DataTransfer\Domain\Writer;


use OrbitCore\DataTransfer\Domain\Builder\TransferBuilderInterface;

class DataTransferWriter implements DataTransferWriterInterface
{
    protected const TEMPLATE_TRANSFER = 'transfer.tpl';
    protected const TEMPLATE_PROPERTY = 'property.tpl';
    protected const TEMPLATE_METHODS = 'methods.tpl';

    /**
     * @var string
     */
    protected $defaultTemplatePath;

    /**
     * @var \OrbitCore\DataTransfer\Domain\Writer\TemplateWriterInterface
     */
    protected $templateWriter;

    /**
     * DataTransferWriter constructor.
     *
     * @param string $defaultTemplatePath
     * @param \OrbitCore\DataTransfer\Domain\Writer\TemplateWriterInterface $templateWriter
     */
    public function __construct(
        string $defaultTemplatePath,
        TemplateWriterInterface $templateWriter
    ) {
        $this->defaultTemplatePath = $defaultTemplatePath;
        $this->templateWriter = $templateWriter;
    }

    public function writeTransfer(TransferBuilderInterface $builder): void
    {
        // TODO: MBX DEBUG
        dump($builder->getData());
        exit;
    }
}
