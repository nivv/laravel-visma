<?php

namespace Webparking\LaravelVisma\Entities;

/**
 * Class InvoiceRow
 *
 * @property integer $LineNumber
 * @property string $ArticleId
 * @property string $ArticleNumber
 * @property double $AmountNoVat
 * @property double $PercentVat
 * @property bool $IsTextRow
 * @property string $Text
 * @property double $UnitPrice
 * @property string $UnitAbbreviation
 * @property string $UnitAbbreviationEnglish
 * @property double $DiscountPercentage
 * @property double $Quantity
 * @property integer $WorkCostType -  None = 0, RotConstructionWork = 1, RotElectricalWork = 2, RotGlassSheetMetalWork = 3, RotGroundWork = 4, RotBrickWork = 5, RotPaintDecorateWork = 6, RotPlumbWork = 7 RutCleanJobWork = 9, RutCareClothTextile = 10, RutCook = 11, RutSnowRemove = 12, RutGarden = 13, RutBabySitt = 14, RutOtherCare = 15, RutHouseWorkHelp = 17 RutRemovalServices = 18, RutITServices = 19, RotHeatPump = 20, RotHeatPump2 = 21, RutHomeAppliances = 22 ,
 * @property bool $IsWorkCost
 * @property bool $IsVatFree
 * @property string $CostCenterItemId1
 * @property string $CostCenterItemId2
 * @property string $CostCenterItemId3
 * @property string $UnitId
 * @property double $WorkHours
 * @property double $MaterialCosts
 * @property string $Id
 * @property string $ProjectId
 * @property integer $GreenTechnologyType - Type of green technology on the order row, can be: None = 0, SolarCellInstallation = 1, ElectricEnergyStorageInstallation = 2, ElectricVehicleChargingPointInstallation = 3, Default value is 0.
 *
 * @package Webparking\LaravelVisma\Entities
 */
class InvoiceRow
{
}
