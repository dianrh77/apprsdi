<?php

namespace App\Filament\Resources;

use ZipArchive;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Actions\ButtonAction;
use App\Models\Transaksi;
use Filament\Tables\Table;
use App\Models\McuTransaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Actions\BulkAction;
use LaraZeus\Accordion\Forms\Accordion;
use LaraZeus\Accordion\Forms\Accordions;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Rupadana\FilamentSlider\Components\InputSlider;
use App\Filament\Resources\McuTransactionResource\Pages;
use Rupadana\FilamentSlider\Components\InputSliderGroup;
use App\Filament\Resources\McuTransactionResource\RelationManagers;
use Filament\Forms\Components\Grid;
use Filament\Tables\Enums\FiltersLayout;
use Livewire\Attributes\Layout;

class McuTransactionResource extends Resource
{
    protected static ?string $model = McuTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationLabel = 'Transaksi MCU';

    protected static ?string $title = 'Transaksi MCU';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('I. Identitas Pasien')->schema([
                    Forms\Components\TextInput::make('kd_rekmed')
                        ->label('Nomor Rekam Medis')
                        ->columnSpan(1)
                        ->readOnly(),

                    Forms\Components\TextInput::make('nama')
                        ->label('Nama Pasien')
                        ->columnSpan(3)
                        ->readOnly(),


                    Forms\Components\DatePicker::make('tanggal_lahir')
                        ->label('Tanggal Lahir')
                        ->columnSpan(1),

                    Forms\Components\TextInput::make('umur')
                        ->label('Umur')
                        ->columnSpan(1),

                    Forms\Components\TextInput::make('alamat')
                        ->label('Alamat')
                        ->columnSpan(2)
                        ->readOnly(),

                    Forms\Components\TextInput::make('jns_kelamin')
                        ->label('Jenis Kelamin')
                        ->columnSpan(2)
                        ->readOnly(),

                    Forms\Components\TextInput::make('nama_dokter')
                        ->label('Dokter')
                        ->columnSpan(2)
                        ->disabled(),
                ])->columns(4),


                Section::make()->schema([
                    Forms\Components\DateTimePicker::make('tanggal')
                        ->label('Tanggal Periksa')
                        ->default(now())
                        ->required(),
                    Forms\Components\TextInput::make('tinggi_badan')
                        ->numeric()
                        ->placeholder('centimeter'),
                    Forms\Components\TextInput::make('berat_badan')
                        ->numeric()
                        ->placeholder('kilogram'),
                    Forms\Components\Select::make('kelompok')
                        ->required()
                        ->label('Kelompok')
                        ->options([
                            'Internal' => 'Internal',
                            'Eksternal' => 'Eksternal',
                        ]),
                ])->columns(4),



                Accordions::make('Options')
                    ->isolated()

                    ->accordions([
                        Accordion::make('anamnesa')
                            ->label('II. Anamnesa')
                            ->schema([
                                Section::make()->schema([
                                    Forms\Components\MarkdownEditor::make('anamnesa')
                                        ->maxLength(300),
                                ])
                            ])
                    ]),

                Accordions::make('Options')
                    ->isolated()

                    ->accordions([
                        Accordion::make('main-data')
                            ->label('III. Riwayat Penyakit Dahulu')
                            ->schema([
                                Split::make([
                                    Fieldset::make('Alergi')->schema([
                                        Forms\Components\Toggle::make('alergi')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('alergi_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('alergi_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),

                                    Fieldset::make('Asma Bronkial')->schema([
                                        Forms\Components\Toggle::make('asma')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('asma_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('asma_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),
                                ])->columnSpanFull()
                                    ->from('md'),

                                Split::make([
                                    Fieldset::make('Hipertensi')->schema([
                                        Forms\Components\Toggle::make('hipertensi')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('hipertensi_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('hipertensi_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),

                                    Fieldset::make('Diabetes Mellitus')->schema([
                                        Forms\Components\Toggle::make('dm')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('dm_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('dm_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),
                                ])->columnSpanFull()
                                    ->from('md'),

                                Split::make([
                                    Fieldset::make('Jantung')->schema([
                                        Forms\Components\Toggle::make('jantung')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('jantung_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('jantung_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),

                                    Fieldset::make('Fraktur')->schema([
                                        Forms\Components\Toggle::make('fraktur')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('fraktur_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('fraktur_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),
                                ])->columnSpanFull()
                                    ->from('md'),

                                Split::make([
                                    Fieldset::make('Gastritis/Maag')->schema([
                                        Forms\Components\Toggle::make('gastritis')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('gastritis_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('gastritis_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),

                                    Fieldset::make('Ginjal')->schema([
                                        Forms\Components\Toggle::make('ginjal')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('ginjal_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('ginjal_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),
                                ])->columnSpanFull()
                                    ->from('md'),

                                Split::make([
                                    Fieldset::make('Hamaerrhoid')->schema([
                                        Forms\Components\Toggle::make('hamaerrhoid')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('hamaerrhoid_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('hamaerrhoid_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),

                                    Fieldset::make('Hepatitis')->schema([
                                        Forms\Components\Toggle::make('hepatitis')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('hepatitis_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('hepatitis_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),
                                ])->columnSpanFull()
                                    ->from('md'),

                                Split::make([
                                    Fieldset::make('Epilepsi')->schema([
                                        Forms\Components\Toggle::make('epilepsi')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('epilepsi_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('epilepsi_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),

                                    Fieldset::make('TBC')->schema([
                                        Forms\Components\Toggle::make('tbc')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('tbc_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('tbc_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),
                                ])->columnSpanFull()
                                    ->from('md'),

                                Split::make([
                                    Fieldset::make('Hernia')->schema([
                                        Forms\Components\Toggle::make('hernia')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('hernia_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('hernia_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),

                                    Fieldset::make('Herpes')->schema([
                                        Forms\Components\Toggle::make('herpes')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('herpes_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('herpes_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),
                                ])->columnSpanFull()
                                    ->from('md'),

                                Split::make([
                                    Fieldset::make('Operasi')->schema([
                                        Forms\Components\Toggle::make('operasi')
                                            ->label('Tidak/Ya')
                                            ->inline(false),
                                        Forms\Components\TextInput::make('operasi_waktu')
                                            ->label('Waktu')
                                            ->maxLength(20)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('operasi_ket')
                                            ->label('Keterangan')
                                            ->maxLength(20)
                                            ->columnSpan(3),
                                    ])->columns(6)
                                        ->grow(),


                                ])->columnSpanFull()
                                    ->from('md'),
                            ])
                    ]),


                Accordions::make('Options')
                    ->isolated()

                    ->accordions([
                        Accordion::make('main-data')
                            ->label('IV. Pemeriksaan Fisik')
                            ->schema([
                                Section::make('A. Keadaan Umum')->schema([
                                    Forms\Components\Select::make('kesadaran')
                                        ->label('Kesadaran')
                                        ->options([
                                            'Composmentis' => 'Composmentis',
                                            'Apatis' => 'Apatis',
                                            'Somnolen' => 'Somnolen',
                                            'Stupor' => 'Stupor',
                                            'Koma' => 'Koma'
                                        ])
                                        ->columnSpanFull(),


                                    Forms\Components\View::make('components.vas-image')
                                        ->columnSpanFull(),
                                    Section::make('')->schema([
                                        InputSliderGroup::make()
                                            ->sliders([
                                                InputSlider::make('vas_score')
                                                    ->default(fn($record) => $record->vas_score ?? 0)
                                            ])
                                            ->max(10)
                                            ->step(1)
                                            ->maxwidth(100)
                                            ->enableTooltips(),

                                    ]),

                                    Forms\Components\TextInput::make('tekanan_darah')
                                        ->label('Tekanan Darah')
                                        ->placeholder('mmHg')
                                        ->columnSpanFull(),

                                    Forms\Components\TextInput::make('nadi')
                                        ->label('Nadi')
                                        ->placeholder('kali/menit'),

                                    Forms\Components\Select::make('nadi_ket')
                                        ->label('Keterangan Nadi')
                                        ->options([
                                            'Reguler' => 'Reguler',
                                            'Irreguler' => 'Irreguler',
                                            'Kuat' => 'Kuat',
                                            'Lemah' => 'Lemah',
                                        ]),

                                    Forms\Components\TextInput::make('respirasi')
                                        ->label('Respirasi')
                                        ->placeholder('kali/menit'),

                                    Forms\Components\Select::make('respirasi_ket')
                                        ->label('Keterangan Respirasi')
                                        ->options([
                                            'Normal' => 'Normal',
                                            'Takipneu' => 'Takipneu',
                                            'Bradipneu' => 'Bradipneu',
                                        ]),

                                    Forms\Components\TextInput::make('suhu')
                                        ->label('Suhu')
                                        ->placeholder('°Celcius'),

                                    Forms\Components\Select::make('suhu_ket')
                                        ->label('Keterangan Suhu')
                                        ->options([
                                            'Normotermi' => 'Normotermi',
                                            'Febris' => 'Febris',
                                            'Hiperpirexia' => 'Hiperpirexia',
                                        ]),
                                ])->columns(2),

                                Section::make('B. Kepala Leher')->schema([
                                    Forms\Components\Select::make('ukuran_kepala')
                                        ->label('Ukuran Kepala')
                                        ->options([
                                            'Normocephal' => 'Normocephal',
                                            'Makrocephal' => 'Makrocephal',
                                        ])
                                        ->columnSpan(3),

                                    Radio::make('mata_kelainan')
                                        ->label('Kelainan Mata')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),

                                    Forms\Components\Select::make('buta_warna')
                                        ->label('Buta Warna')
                                        ->options([
                                            'Normal' => 'Normal',
                                            'Parsial' => 'Parsial',
                                            'Total' => 'Total',
                                        ])
                                        ->default('Normal')
                                        ->columnSpan(1),

                                    Forms\Components\TextInput::make('mata_ket')
                                        ->label('Keterangan Mata')
                                        ->columnSpan(1),

                                    Radio::make('kelainan_hidung')
                                        ->label('Kelainan Hidung')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),


                                    Forms\Components\TextInput::make('kelainan_hidung_ket')
                                        ->label('Keterangan Hidung')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_mulut')
                                        ->label('Kelainan Mulut')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),


                                    Forms\Components\TextInput::make('kelainan_mulut_ket')
                                        ->label('Keterangan Mulut')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_tenggorokan')
                                        ->label('Kelainan Tenggorokan')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),


                                    Forms\Components\TextInput::make('kelainan_tenggorokan_ket')
                                        ->label('Keterangan Tenggorokan')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_tiroid')
                                        ->label('Kelainan Tiroid')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),


                                    Forms\Components\TextInput::make('kelainan_tiroid_ket')
                                        ->label('Keterangan Tiroid')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_jvp')
                                        ->label('Kelainan JVP')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),


                                    Forms\Components\TextInput::make('kelainan_jvp_ket')
                                        ->label('Keterangan JVP')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_kgb')
                                        ->label('Kelainan KGB')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),


                                    Forms\Components\TextInput::make('kelainan_kgb_ket')
                                        ->label('Keterangan KGB')
                                        ->columnSpan(2),
                                ])->columns(3),


                                Section::make('C. Thorax')->schema([
                                    Split::make([
                                        Fieldset::make('Gerak')->schema([
                                            Radio::make('thorax_gerak')
                                                ->options([
                                                    'Simetris' => 'Simetris',
                                                    'Asimetris' => 'Asimetris',
                                                ])
                                                ->columnSpanFull()
                                                ->inline()
                                                ->label('')
                                                ->default('Simetris')
                                                ->inlineLabel(false)
                                        ])->grow(),

                                        Fieldset::make('Deformitas')->schema([
                                            Radio::make('thorax_deformitas')
                                                ->options([
                                                    'Tidak' => 'Tidak',
                                                    'Lordosis' => 'Lordosis',
                                                    'Kifosis' => 'Kifosis',
                                                    'Skoliosis' => 'Skoliosis',
                                                ])
                                                ->columnSpanFull()
                                                ->inline()
                                                ->label('')
                                                ->default('Tidak')
                                                ->inlineLabel(false)
                                        ])->grow(),
                                    ])->columnSpanFull()
                                        ->from('md'),

                                    Fieldset::make('Bentuk')->schema([
                                        Radio::make('thorax_bentuk')
                                            ->options([
                                                'Normal' => 'Normal',
                                                'Barrel' => 'Barrel',
                                                'Funnel' => 'Funnel',
                                                'Pigeon chest' => 'Pigeon chest',
                                            ])
                                            ->columnSpanFull()
                                            ->inline()
                                            ->label('')
                                            ->default('Normal')
                                            ->inlineLabel(false)
                                    ]),

                                    Fieldset::make('Jantung')->schema([
                                        Radio::make('thorax_jantung_ictus_cordis')
                                            ->options([
                                                true => 'Ada',
                                                false => 'Tidak',
                                            ])
                                            ->columnSpanFull()
                                            ->inline()
                                            ->label('Ictus Cordis'),

                                        Radio::make('thorax_jantung_bunyi')
                                            ->options([
                                                'Murni' => 'Murni',
                                                'Reguler' => 'Reguler',
                                                'Tidak' => 'Tidak',
                                            ])
                                            ->columnSpanFull()
                                            ->inline()
                                            ->label('Bunyi Jantung'),

                                        Radio::make('thorax_jantung_bising')
                                            ->options([
                                                true => 'Ada',
                                                false => 'Tidak',
                                            ])
                                            ->columnSpanFull()
                                            ->inline()
                                            ->label('Bising Jantung')
                                    ]),

                                    Radio::make('kelainan_thorax_paru_palpasi')
                                        ->label('Paru Palpasi')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),

                                    Forms\Components\TextInput::make('thorax_paru_palpasi')
                                        ->label('Keterangan Paru Palpasi')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_thorax_paru_perkusi')
                                        ->label('Paru Perkusi')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),

                                    Forms\Components\TextInput::make('thorax_paru_perkusi')
                                        ->label('Keterangan Paru Perkusi')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_thorax_paru_auskultasi')
                                        ->label('Paru Auskultasi')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),

                                    Forms\Components\TextInput::make('thorax_paru_auskultasi')
                                        ->label('Keterangan Paru Auskultasi')
                                        ->columnSpan(2),
                                ])->columns(3),

                                Section::make('D. Abdomen')->schema([
                                    Forms\Components\Toggle::make('perut_soefl')
                                        ->label('Soefl'),
                                    Forms\Components\Toggle::make('perut_meteorismus')
                                        ->label('Meteorismus'),
                                    Forms\Components\Toggle::make('perut_massa')
                                        ->label('Massa'),
                                    Forms\Components\Toggle::make('perut_bising_usus')
                                        ->label('Bising Usus')
                                        ->inline(),
                                    Radio::make('perut_hepar')
                                        ->options([
                                            true => 'Teraba',
                                            false => 'Tidak',
                                        ])
                                        ->columnSpan(2)
                                        ->inline()
                                        ->default(false)
                                        ->label('Hepar'),

                                    Radio::make('perut_lien')
                                        ->options([
                                            true => 'Teraba',
                                            false => 'Tidak',
                                        ])
                                        ->columnStart(1)
                                        ->columnSpan(2)
                                        ->inline()
                                        ->default(false)
                                        ->label('Lien'),

                                    Fieldset::make('Appendiks')->schema([
                                        Forms\Components\Toggle::make('perut_appendiks_mcburney')
                                            ->label('Mc. Burney sign')
                                            ->inline(),

                                        Forms\Components\Toggle::make('perut_appendiks_rovsing')
                                            ->label('Rovsing sign')
                                            ->inline(),
                                    ])
                                ])->columns(4),

                                Section::make('E. Extremitas')->schema([
                                    Radio::make('kelainan_ext_deformitas')
                                        ->label('Deformitas')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),

                                    Forms\Components\TextInput::make('ext_deformitas')
                                        ->label('Keterangan Deformitas')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_ext_kelemahan_anggota')
                                        ->label('Kelemahan Aggota Gerak')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),

                                    Forms\Components\TextInput::make('ext_kelemahan_anggota')
                                        ->label('Keterangan Kelemahan Aggota Gerak')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_ext_pitting_oedem')
                                        ->label('Pitting Oedem')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),

                                    Forms\Components\TextInput::make('ext_pitting_oedem')
                                        ->label('Keterangan Pitting Oedem')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_ext_varises')
                                        ->label('Varises')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),

                                    Forms\Components\TextInput::make('ext_varises')
                                        ->label('Keterangan Varises')
                                        ->columnSpan(2),

                                    Radio::make('kelainan_ext_tremor')
                                        ->label('Tremor')
                                        ->options([
                                            false => 'Tidak Ada',
                                            true => 'Ada Kelainan',
                                        ])
                                        ->inline()
                                        ->inlineLabel(false)
                                        ->default(false)
                                        ->columnSpan(1),

                                    Forms\Components\TextInput::make('ext_tremor')
                                        ->label('Keterangan Tremor')
                                        ->columnSpan(2),
                                ])->columns(3),

                                Section::make('F. Rekomendasi')->schema([
                                    Forms\Components\TextInput::make('status_kesehatan')
                                        ->label('Status Kesehatan')
                                        ->inlineLabel()
                                        ->maxLength(50),
                                    Forms\Components\TextInput::make('rekomendasi')
                                        ->label('Rekomendasi')
                                        ->inlineLabel()
                                        ->maxLength(50),
                                    Forms\Components\TextInput::make('kd_dokter')
                                        ->inlineLabel()
                                        ->maxLength(50)
                                        ->readOnly(),
                                    Forms\Components\TextInput::make('nama_dokter')
                                        ->inlineLabel()
                                        ->label('Nama Dokter')
                                        ->maxLength(50),
                                ])
                            ])
                    ]),

            ])->columns(1);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('kd_rekmed')
                    ->label('RM')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_dokter')
                    ->label('Dokter')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Filter berdasarkan rentang tanggal
                Filter::make('Rentang Tanggal')
                    ->form([
                        Grid::make()->schema([
                            Forms\Components\DatePicker::make('start_date')
                                ->label('Tanggal Mulai')
                                ->placeholder('Pilih Tanggal Mulai')
                                ->default(Carbon::now()->startOfMonth()),
                            Forms\Components\DatePicker::make('end_date')
                                ->label('Tanggal Akhir')
                                ->placeholder('Pilih Tanggal Akhir')
                                ->default(Carbon::now()->endOfDay()),
                        ])->columns(2)
                    ])
                    ->query(function ($query, array $data) {
                        // Filter query berdasarkan rentang tanggal
                        if ($data['start_date'] && $data['end_date']) {
                            $query->whereBetween('tanggal', [
                                Carbon::parse($data['start_date'])->startOfDay(),
                                Carbon::parse($data['end_date'])->endOfDay(),
                            ]);
                        }
                    })
                    ->label('Filter Berdasarkan Tanggal'),
            ], layout: FiltersLayout::AboveContent)
            ->filtersFormColumns(2)
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make("Download")
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(fn(McuTransaction $record) => route('download.pdf', $record))
                    ->openUrlInNewTab(),
            ])
            ->bulkActions([
                BulkAction::make('downloadPDFs')
                    ->label('Download All PDFs')
                    ->action(function (Collection $records) {
                        // Nama file ZIP
                        $zipFileName = 'MCU_Reports.zip';

                        // Path penyimpanan sementara untuk ZIP
                        $zipPath = storage_path("app/temp/{$zipFileName}");
                        $zip = new ZipArchive;
                        if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
                            // Iterasi setiap rekaman yang dipilih
                            foreach ($records as $record) {
                                // Persiapkan data untuk setiap file PDF
                                $data = [
                                    'title' => 'MCU Report',
                                    'date' => date('m/d/Y'),
                                    'mcutransaksi' => $record,
                                ];

                                // Set options
                                $pdfOptions = [
                                    'isRemoteEnabled' => true,
                                ];


                                // Generate PDF
                                $pdf = Pdf::loadView('userPDF', $data)->setOptions($pdfOptions);

                                // Tentukan nama file PDF berdasarkan data
                                $nama = str_replace(' ', '_', $record->nama);
                                $registrasi = str_replace(' ', '_', $record->kd_regpoli);
                                $pdfFileName = "{$nama}_{$registrasi}_MCURSDI.pdf";

                                // Simpan PDF di storage sementara
                                $pdfPath = storage_path("app/temp/{$pdfFileName}");
                                $pdf->save($pdfPath);

                                // Masukkan file PDF ke ZIP
                                $zip->addFile($pdfPath, $pdfFileName);
                            }

                            // Tutup file ZIP
                            $zip->close();
                        }

                        // Download file ZIP
                        return response()->download($zipPath)->deleteFileAfterSend(true);
                    }),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMcuTransactions::route('/'),
            'create' => Pages\CreateMcuTransaction::route('/create'),
            'view' => Pages\ViewMcuTransaction::route('/{record}'),
            'edit' => Pages\EditMcuTransaction::route('/{record}/edit'),
        ];
    }
}
