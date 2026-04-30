# Kata Docker Helper
# Usage: make <target>

.PHONY: help build shell \
        gilded-rose-install gilded-rose-test \
        tripbook-install     tripbook-test \
        bowling-install      bowling-test \
        racingcar-install    racingcar-test \
        fizzbuzz-install     fizzbuzz-test

help:
	@echo ""
	@echo "🥋 Kata Docker Helper"
	@echo "─────────────────────────────────────────"
	@echo "  make build              Build the Docker image"
	@echo "  make shell              Open an interactive shell"
	@echo ""
	@echo "  make gilded-rose-install  Install dependencies for GildedRose"
	@echo "  make gilded-rose-test     Run GildedRose tests"
	@echo ""
	@echo "  make tripbook-install     Install dependencies for TripBook"
	@echo "  make tripbook-test        Run TripBook tests"
	@echo ""
	@echo "  make bowling-install      Install dependencies for Bowling"
	@echo "  make bowling-test         Run Bowling tests"
	@echo ""
	@echo "  make racingcar-install    Install dependencies for RacingCar"
	@echo "  make racingcar-test       Run RacingCar tests"
	@echo ""
	@echo "  make fizzbuzz-install     Install dependencies for FizzBuzz"
	@echo "  make fizzbuzz-test        Run FizzBuzz tests"
	@echo ""

build:
	docker compose build

shell:
	docker compose run --rm kata bash

# ─── GildedRose ───────────────────────────────
gilded-rose-install:
	KATA_DIR=GildedRose docker compose run --rm composer install

gilded-rose-test:
	KATA_DIR=GildedRose docker compose run --rm phpunit

# ─── TripBook ─────────────────────────────────
tripbook-install:
	KATA_DIR=TripBook docker compose run --rm composer install

tripbook-test:
	KATA_DIR=TripBook docker compose run --rm phpunit

# ─── Bowling ──────────────────────────────────
bowling-install:
	KATA_DIR=Bowling docker compose run --rm composer install

bowling-test:
	KATA_DIR=Bowling docker compose run --rm phpunit

# ─── RacingCar ────────────────────────────────
racingcar-install:
	KATA_DIR=RacingCar docker compose run --rm composer install

racingcar-test:
	KATA_DIR=RacingCar docker compose run --rm phpunit

# ─── FizzBuzz ─────────────────────────────────
fizzbuzz-install:
	KATA_DIR=FizzBuzz docker compose run --rm composer install

fizzbuzz-test:
	KATA_DIR=FizzBuzz docker compose run --rm phpunit
