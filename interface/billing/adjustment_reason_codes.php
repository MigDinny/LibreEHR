<?php

// See http://www.wpc-edi.com/codes
//
$adjustment_reasons = array(
 '1' => 'Deductible Amount',
 '2' => 'Coinsurance Amount',
 '3' => 'Co-payment Amount',
 '4' => 'The procedure code is inconsistent with the modifier used or a required modifier is missing',
 '5' => 'The procedure code/bill type is inconsistent with the place of service',
 '6' => 'The procedure/revenue code is inconsistent with the patients age',
 '7' => 'The procedure/revenue code is inconsistent with the patients gender',
 '8' => 'The procedure code is inconsistent with the provider type/specialty (taxonomy)',
 '9' => 'The diagnosis is inconsistent with the patients age',
 '10' => 'The diagnosis is inconsistent with the patients gender',
 '11' => 'The diagnosis is inconsistent with the procedure',
 '12' => 'The diagnosis is inconsistent with the provider type',
 '13' => 'The date of death precedes the date of service',
 '14' => 'The date of birth follows the date of service',
 '15' => 'Payment adjusted because the submitted authorization number is missing, invalid, or does not apply to the billed services or provider',
 '16' => 'Claim/service lacks information which is needed for adjudication. Additional information is supplied using remittance advice remarks codes whenever appropriate',
 '17' => 'Payment adjusted because requested information was not provided or was insufficient/incomplete. Additional information is supplied using the remittance advice remarks codes whenever appropriate',
 '18' => 'Duplicate claim/service',
 '19' => 'Claim denied because this is a work-related injury/illness and thus the liability of the Workers Compensation Carrier',
 '20' => 'Claim denied because this injury/illness is covered by the liability carrier',
 '21' => 'Claim denied because this injury/illness is the liability of the no-fault carrier',
 '22' => 'Payment adjusted because this care may be covered by another payer per coordination of benefits',
 '23' => 'Payment adjusted due to the impact of prior payer(s) adjudication including payments and/or adjustments',
 '24' => 'Payment for charges adjusted. Charges are covered under a capitation agreement/managed care plan',
 '25' => 'Payment denied. Your Stop loss deductible has not been met',
 '26' => 'Expenses incurred prior to coverage',
 '27' => 'Expenses incurred after coverage terminated',
 '29' => 'The time limit for filing has expired',
 '31' => 'Claim denied as patient cannot be identified as our insured',
 '32' => 'Our records indicate that this dependent is not an eligible dependent as defined',
 '33' => 'Claim denied. Insured has no dependent coverage',
 '34' => 'Claim denied. Insured has no coverage for newborns',
 '35' => 'Lifetime benefit maximum has been reached',
 '38' => 'Services not provided or authorized by designated (network/primary care) providers',
 '39' => 'Services denied at the time authorization/pre-certification was requested',
 '40' => 'Charges do not meet qualifications for emergent/urgent care',
 '42' => 'Charges exceed our fee schedule or maximum allowable amount',
 '43' => 'Gramm-Rudman reduction',
 '44' => 'Prompt-pay discount',
 '45' => 'Charges exceed your contracted/ legislated fee arrangement',
 '49' => 'These are non-covered services because this is a routine exam or screening procedure done in conjunction with a routine exam',
 '50' => 'These are non-covered services because this is not deemed a "medical necessity" by the payer',
 '51' => 'These are non-covered services because this is a pre-existing condition',
 '53' => 'Services by an immediate relative or a member of the same household are not covered',
 '54' => 'Multiple physicians/assistants are not covered in this case ',
 '55' => 'Claim/service denied because procedure/treatment is deemed experimental/investigational by the payer',
 '56' => 'Claim/service denied because procedure/treatment has not been deemed "proven to be effective" by the payer',
 '57' => 'Payment denied/reduced because the payer deems the information submitted does not support this level of service, this many services, this length of service, this dosage, or this days supply',
 '58' => 'Payment adjusted because treatment was deemed by the payer to have been rendered in an inappropriate or invalid place of service',
 '59' => 'Charges are adjusted based on multiple surgery rules or concurrent anesthesia rules',
 '60' => 'Charges for outpatient services with this proximity to inpatient services are not covered',
 '61' => 'Charges adjusted as penalty for failure to obtain second surgical opinion',
 '62' => 'Payment denied/reduced for absence of, or exceeded, pre-certification/authorization',
 '66' => 'Blood Deductible',
 '69' => 'Day outlier amount',
 '70' => 'Cost outlier - Adjustment to compensate for additional costs',
 '74' => 'Indirect Medical Education Adjustment',
 '75' => 'Direct Medical Education Adjustment',
 '76' => 'Disproportionate Share Adjustment',
 '78' => 'Non-Covered days/Room charge adjustment',
 '85' => 'Interest amount',
 '87' => 'Transfer amount',
 '88' => 'Adjustment amount represents collection against receivable created in prior overpayment',
 '89' => 'Professional fees removed from charges',
 '90' => 'Ingredient cost adjustment',
 '91' => 'Dispensing fee adjustment',
 '94' => 'Processed in Excess of charges',
 '95' => 'Benefits adjusted. Plan procedures not followed',
 '96' => 'Non-covered charge(s)',
 '97' => 'Payment is included in the allowance for another service/procedure',
 '100' => 'Payment made to patient/insured/responsible party',
 '101' => 'Predetermination: anticipated payment upon completion of services or claim adjudication',
 '102' => 'Major Medical Adjustment',
 '103' => 'Provider promotional discount (e.g., Senior citizen discount)',
 '104' => 'Managed care withholding',
 '105' => 'Tax withholding',
 '106' => 'Patient payment option/election not in effect',
 '107' => 'Claim/service denied because the related or qualifying claim/service was not previously paid or identified on this claim',
 '108' => 'Payment adjusted because rent/purchase guidelines were not met',
 '109' => 'Claim not covered by this payer/contractor. You must send the claim to the correct payer/contractor',
 '110' => 'Billing date predates service date',
 '111' => 'Not covered unless the provider accepts assignment',
 '112' => 'Payment adjusted as not furnished directly to the patient and/or not documented',
 '113' => 'Payment denied because service/procedure was provided outside the United States or as a result of war',
 '114' => 'Procedure/product not approved by the Food and Drug Administration',
 '115' => 'Payment adjusted as procedure postponed or canceled',
 '116' => 'Payment denied. The advance indemnification notice signed by the patient did not comply with requirements',
 '117' => 'Payment adjusted because transportation is only covered to the closest facility that can provide the necessary care',
 '118' => 'Charges reduced for ESRD network support',
 '119' => 'Benefit maximum for this time period or occurrence has been reached',
 '120' => 'Patient is covered by a managed care plan',
 '121' => 'Indemnification adjustment',
 '122' => 'Psychiatric reduction',
 '123' => 'Payer refund due to overpayment',
 '124' => 'Payer refund amount - not our patient',
 '125' => 'Payment adjusted due to a submission/billing error(s). Additional information is supplied using the remittance advice remarks codes whenever appropriate',
 '126' => 'Deductible -- Major Medical',
 '127' => 'Coinsurance -- Major Medical',
 '128' => 'Newborns services are covered in the mothers Allowance',
 '129' => 'Payment denied - Prior processing information appears incorrect',
 '130' => 'Claim submission fee',
 '131' => 'Claim specific negotiated discount',
 '132' => 'Prearranged demonstration project adjustment',
 '133' => 'The disposition of this claim/service is pending further review',
 '134' => 'Technical fees removed from charges',
 '135' => 'Claim denied. Interim bills cannot be processed',
 '136' => 'Claim Adjusted. Plan procedures of a prior payer were not followed',
 '137' => 'Payment/Reduction for Regulatory Surcharges, Assessments, Allowances or Health Related Taxes',
 '138' => 'Claim/service denied. Appeal procedures not followed or time limits not met',
 '139' => 'Contracted funding agreement - Subscriber is employed by the provider of services',
 '140' => 'Patient/Insured health identification number and name do not match',
 '141' => 'Claim adjustment because the claim spans eligible and ineligible periods of coverage',
 '142' => 'Claim adjusted by the monthly Medicaid patient liability amount',
 '143' => 'Portion of payment deferred',
 '144' => 'Incentive adjustment, e.g. preferred product/service',
 '145' => 'Premium payment withholding',
 '146' => 'Payment denied because the diagnosis was invalid for the date(s) of service reported',
 '147' => 'Provider contracted/negotiated rate expired or not on file',
 '148' => 'Claim/service rejected at this time because information from another provider was not provided or was insufficient/incomplete',
 '149' => 'Lifetime benefit maximum has been reached for this service/benefit category',
 '150' => 'Payment adjusted because the payer deems the information submitted does not support this level of service',
 '151' => 'Payment adjusted because the payer deems the information submitted does not support this many services',
 '152' => 'Payment adjusted because the payer deems the information submitted does not support this length of service',
 '153' => 'Payment adjusted because the payer deems the information submitted does not support this dosage',
 '154' => 'Payment adjusted because the payer deems the information submitted does not support this days supply',
 '155' => 'This claim is denied because the patient refused the service/procedure',
 '156' => 'Flexible spending account payments',
 '157' => 'Payment denied/reduced because service/procedure was provided as a result of an act of war',
 '158' => 'Payment denied/reduced because the service/procedure was provided outside of the United States',
 '159' => 'Payment denied/reduced because the service/procedure was provided as a result of terrorism',
 '160' => 'Payment denied/reduced because injury/illness was the result of an activity that is a benefit exclusion',
 '161' => 'Provider performance bonus',
 '162' => 'State-mandated Requirement for Property and Casualty, see Claim Payment Remarks Code for specific explanation',
 '163' => 'Claim/Service adjusted because the attachment referenced on the claim was not received',
 '164' => 'Claim/Service adjusted because the attachment referenced on the claim was not received in a timely fashion',
 '165' => 'Payment denied /reduced for absence of, or exceeded referral',
 '166' => 'These services were submitted after this payers responsibility for processing claims under this plan ended',
 '167' => 'This (these) diagnosis(es) is (are) not covered',
 '168' => 'Payment denied as Service(s) have been considered under the patients medical plan. Benefits are not available under this dental plan',
 '169' => 'Payment adjusted because an alternate benefit has been provided',
 '170' => 'Payment is denied when performed/billed by this type of provider',
 '171' => 'Payment is denied when performed/billed by this type of provider in this type of facility',
 '172' => 'Payment is adjusted when performed/billed by a provider of this specialty',
 '173' => 'Payment adjusted because this service was not prescribed by a physician',
 '174' => 'Payment denied because this service was not prescribed prior to delivery',
 '175' => 'Payment denied because the prescription is incomplete',
 '176' => 'Payment denied because the prescription is not current',
 '177' => 'Payment denied because the patient has not met the required eligibility requirements',
 '178' => 'Payment adjusted because the patient has not met the required spend down requirements',
 '179' => 'Payment adjusted because the patient has not met the required waiting requirements',
 '180' => 'Payment adjusted because the patient has not met the required residency requirements',
 '181' => 'Payment adjusted because this procedure code was invalid on the date of service',
 '182' => 'Payment adjusted because the procedure modifier was invalid on the date of service',
 '183' => 'The referring provider is not eligible to refer the service billed',
 '184' => 'The prescribing/ordering provider is not eligible to prescribe/order the service billed',
 '185' => 'The rendering provider is not eligible to perform the service billed',
 '186' => 'Payment adjusted since the level of care changed',
 '187' => 'Health Savings account payments',
 '188' => 'This product/procedure is only covered when used according to FDA recommendations',
 '189' => '"Not otherwise classified" or "unlisted" procedure code (CPT/HCPCS) was billed when there is a specific procedure code for this procedure/service',
 '190' => 'Payment is included in the allowance for a Skilled Nursing Facility (SNF) qualified stay',
 '191' => 'Claim denied because this is not a work related injury/illness and thus not the liability of the workers’ compensation carrier',
 '192' => 'Non standard adjustment code from paper remittance advice',
 '193' => 'Original payment decision is being maintained. This claim was processed properly the first time',
 '194' => 'Payment adjusted when anesthesia is performed by the operating physician, the assistant surgeon or the attending physician',
 '195' => 'Payment denied/reduced due to a refund issued to an erroneous priority payer for this claim/service',
 'A0' => 'Patient refund amount',
 'A1' => 'Claim denied charges',
 'A2' => 'Contractual adjustment',
 'A4' => 'Medicare Claim PPS Capital Day Outlier Amount',
 'A5' => 'Medicare Claim PPS Capital Cost Outlier Amount',
 'A6' => 'Prior hospitalization or 30 day transfer requirement not met',
 'A7' => 'Presumptive Payment Adjustment',
 'A8' => 'Claim denied; ungroupable DRG',
 'B1' => 'Non-covered visits',
 'B4' => 'Late filing penalty',
 'B5' => 'Payment adjusted because coverage/program guidelines were not met or were exceeded',
 'B7' => 'This provider was not certified/eligible to be paid for this procedure/service on this date of service',
 'B8' => 'Claim/service not covered/reduced because alternative services were available, and should have been utilized',
 'B9' => 'Services not covered because the patient is enrolled in a Hospice',
 'B10' => 'Allowed amount has been reduced because a component of the basic procedure/test was paid. The beneficiary is not liable for more than the charge limit for the basic procedure/test',
 'B11' => 'The claim/service has been transferred to the proper payer/processor for processing. Claim/service not covered by this payer/processor',
 'B12' => 'Services not documented in patients medical records',
 'B13' => 'Previously paid. Payment for this claim/service may have been provided in a previous payment',
 'B14' => 'Payment denied because only one visit or consultation per physician per day is covered',
 'B15' => 'Payment adjusted because this procedure/service is not paid separately',
 'B16' => 'Payment adjusted because "New Patient" qualifications were not met',
 'B18' => 'Payment adjusted because this procedure code and modifier were invalid on the date of service',
 'B20' => 'Payment adjusted because procedure/service was partially or fully furnished by another provider',
 'B22' => 'This payment is adjusted based on the diagnosis',
 'B23' => 'Payment denied because this provider has failed an aspect of a proficiency testing program',
 'D16' => 'Claim lacks prior payer payment information',
 'D17' => 'Claim/Service has invalid non-covered days',
 'D18' => 'Claim/Service has missing diagnosis information',
 'D19' => 'Claim/Service lacks Physician/Operative or other supporting documentation',
 'D20' => 'Claim/Service missing service/product information',
 'D21' => 'This (these) diagnosis(es) is (are) missing or are invalid',
 'W1' => 'Workers Compensation State Fee Schedule Adjustment'
);
?>
