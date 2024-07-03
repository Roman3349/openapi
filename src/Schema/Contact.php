<?php declare(strict_types = 1);

namespace Contributte\OpenApi\Schema;

class Contact
{

	private ?string $name = null;

	private ?string $url = null;

	private ?string $email = null;

	private ?VendorExtensions $vendorExtensions = null;

	/**
	 * @param mixed[] $data
	 */
	public static function fromArray(array $data): Contact
	{
		$contact = new Contact();
		$contact->setName($data['name'] ?? null);
		$contact->setUrl($data['url'] ?? null);
		$contact->setEmail($data['email'] ?? null);
		$contact->setVendorExtensions(VendorExtensions::fromArray($data));

		return $contact;
	}

	/**
	 * @return mixed[]
	 */
	public function toArray(): array
	{
		$data = [];

		if ($this->name !== null) {
			$data['name'] = $this->name;
		}

		if ($this->url !== null) {
			$data['url'] = $this->url;
		}

		if ($this->email !== null) {
			$data['email'] = $this->email;
		}

		return $data;
	}

	public function setName(?string $name): void
	{
		$this->name = $name;
	}

	public function setUrl(?string $url): void
	{
		$this->url = $url;
	}

	public function setEmail(?string $email): void
	{
		$this->email = $email;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getUrl(): ?string
	{
		return $this->url;
	}

	public function getEmail(): ?string
	{
		return $this->email;
	}

	public function getVendorExtensions(): ?VendorExtensions
	{
		return $this->vendorExtensions;
	}

	public function setVendorExtensions(?VendorExtensions $vendorExtensions): void
	{
		$this->vendorExtensions = $vendorExtensions;
	}

}
